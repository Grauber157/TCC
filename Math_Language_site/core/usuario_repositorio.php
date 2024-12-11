<?php
    session_start();
    //Função limpar dados
    require_once '../php/include/funcoes.php';
    //Função de conexão
    require_once 'conexao_mysql.php';
    //Comandos base sql
    require_once 'sql.php';
    //Comandos formatados mysql
    require_once 'mysql.php';
    //Salt pra função hash
    $salt = '$exemplosaltifsp';
    
    foreach($_POST as $indice => $dado)
    {
        $$indice = limparDados($dado);
    }

    foreach($_GET as $indice => $dado)
    {
        $$indice = limparDados($dado);
    }

    switch($acao)
    {
        //CADASTRA-INSERE O USUARIO NO BANCO
        case 'criar':
            $retorno = Buscar('usuario', ['email'], [['email', '=', $email]]);
            var_dump($retorno);
            if(!isset($retorno[0]['email']) || is_null($retorno[0]['email']))
            {
                #atribuicao de dados
                $dados = [
                    'email' => $email,
                    #criptografa a senha
                    'senha' => crypt($senha, $salt),
                    'nome_usuario' => $name,
                    'apelido_usuario' => $nickname,
                    'data_nascimento' => $data,
                    'ano_escolar' => $ano_escola,
                    'instituicao_escolar' => $nome_escola
                    ];
                #funcao inserir
                Inserir('usuario', $dados);
                
                #inicia o sistema de pontuacao do usuario
                $id = Buscar('usuario', ['id'], [['email','=',$dados['email']]]);

                var_dump($id);
                Inserir('usuario_jogos', ['id_usuario' => $id[0]['id'], 'id_jogo' => 0, 'pontuacao_jogo' => 0]);

                #envia para o login
                header ('Location: ../index.php');
            }
            else
            {
                echo "Email já está em uso!";
            }
        break;


        //ATUALIZA O PERFIL DO BANCO
        case 'atualizar':
            #id para identificar o usuario na tabela
            $dados = [
                'apelido_usuario' => $nickname,
                'descricao' => $descricao,
                'ano_escolar' => $ano_escola,
                'instituicao_escolar' => $nome_escola
                ];
                
            $criterio = [
                ['id', '=', $_SESSION['id']]
            ];
            #funcao atualiza
            Atualizar('usuario', $dados, $criterio);
            header('Location: ../index.php');
            exit;
        break;


        //LOGIN USUARIO
        case 'login':
            #criterio para checagem
            $criterio = [
                ['email', '=', $email]
            ] ;
            #retorno da busca para checagem de dados
            $retorno = Buscar('usuario', ['id', 'email', 'senha', 'nome_usuario', 'turma_codigo'], $criterio);

            #CRITERIO 1) se obter um retorno na busca maior que 0
            if(count($retorno) > 0) 
            {
                #CRITERIO 2) se o hash inserido for igual ao hash do banco
                if(crypt($senha, $salt) == $retorno[0]['senha']) 
                {
                    $_SESSION['id'] = $retorno[0]['id'];
                    $_SESSION['nome_usuario'] = $retorno[0]['nome_usuario'];
                    header ('Location: ../index.php');
                    exit;
                }
            }
        break;


        //LOG OUT DO USUARIO
        case 'logout':
            session_destroy();
            header('Location: ../index.php');
            exit;
        break;


        //DELETA O USUARIO
        case 'deletar':

            $retorno = Buscar('turma', ['codigo', 'nome_turma'], [['administrador', '=', $_SESSION['id']]]);

            if(!count($retorno))
            {
                #Deleta o usuario
                $sql = 'DELETE FROM usuario WHERE id ="'. $_SESSION['id'].'"';
                ComandoSql($sql);
                #Deleta a pontuacao do usuario excluido
                $sql = 'DELETE FROM usuario_jogos WHERE id_usuario ="'.$_SESSION['id'].'"';
                ComandoSql($sql);
                #Realiza o logout
                session_destroy();
                header('Location: ../index.php');
            }
            else
            {
                echo 'Você é administrador de uma turma! Exclua a turma antes de sair!';
            }
            

            // header('Location: ../index.php');
            exit;
        break;
    }
    
    //header ('Location: ../index.php');
?>