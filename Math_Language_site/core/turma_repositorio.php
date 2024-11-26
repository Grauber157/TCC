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
        //CADASTRA-INSERE A TURMA NO BANCO
        case 'criar':
            //Gera o $codigo_turma
            require_once '../php/include/gerador_codigo_turma.php';
            #atribuicao de dados
            $dados = [
                'codigo' => $codigo_turma,
                'nome' => $nome_turma,
                #criptografa a senha
                'senha' => crypt($senha, $salt),
                ];
                #funcao inserir
            Inserir('turma', $dados);
        break;


        //ATUALIZA A TURMA NO BANCO #improvavel de mexer
        case 'update':
            #id para identificar a turma na tabela
            $id = (int)$id;
            $dados = [
                'nome' => $nome,
                'email' => $email
            ];
                
            $criterio = ['id', '-', $id];
            #funcao atualiza
            Atualizar('turma', $dados, $criterio);
        break;


        //ENTRAR NA TURMA
        case 'entrar':
            #criterio para checagem
            $criterio = ['codigo', '=', $codigo_turma];
            #retorno da busca para checagem de dados
            $retorno = Buscar('turma', ['codigo', 'nome_turma', 'senha'], $criterio);

            #CRITERIO 1) se obter um retorno na busca maior que 0
            if(count($retorno) > 0) 
            {
                #CRITERIO 2) se o hash inserido for igual ao hash do banco
                if(crypt($senha,$salt) == $retorno[0]['senha']) 
                {
                    #muda a coluna 'codigo_turma' do USUARIO, adicionando o codigo da turma
                    Inserir('usuario', [$codigo_turma]);
                    header ('Location: ../index.php');
                    exit;
                }
            }
        break;


        //LOG OUT DO USUARIO #precisa adaptar para as turmas
        case 'sair':
            session_destroy();
        break;


        //ADMINISTRADOR #provavelmente vai ser usado nas turmas
        case 'adm':
            $id = (int)$id;
            $valor = (int)$valor;
            
            $dados = [
                'adm'=> $valor
            ];

            $criterio = ['id', '=', $id];
            #funcao para dar permissao ADM para o usuario
            Atualizar('turma', $dados, $criterio);

            //header('Location: ../usuarios.php'); #trocar a 'location:'
            exit;
        break;
    }
    #header ('Location: ../index.php');
?>