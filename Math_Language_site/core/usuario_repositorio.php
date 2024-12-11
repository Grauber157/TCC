<?php
    session_start();
    //Função limpar dados
    require_once '../php/include/funcoes.php';
    // require_once 'D:\wamp64\www\TCC\Math_Language_site\php\include\funcoes.php';
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
            header ('Location: ../index.php');
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
        break;


        //DELETA O USUARIO
        case 'deletar':
            Deletar('usuario', [['id', '=', $_SESSION['id']]]);
            Deletar('usuario_jogos', [['id_usuario', '=', $_SESSION['id']]]);
        break;
    }
    
    //header ('Location: ../index.php');
?>