<?php
    session_start();
    //Função limpar dados
    require_once '../php/includes/funcoes.php';
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
        case 'insert':
            #atribuicao de dados
            $dados = [
                'nome' => $nome,
                'email' => $email,
                #criptografa a senha
                'senha' => crypt($senha, $salt)
                ];
                #funcao inserir
                Inserir('usuario', $dados);
                break;


        //ATUALIZA O PERFIL DO BANCO
        case 'update':
            #id para identificar o usuario na tabela
            $id = (int)$id;
            $dados = [
                'nome' => $nome,
                'email' => $email
                ];
                
            $criterio = [
                ['id', '-', $id]
            ];
            #funcao atualiza
            Atualizar('usuario', $dados, $criterio);
            break;


        //LOGIN USUARIO
        case 'login':
            #criterio para checagem
            $criterio = [
                ['email', '=', $email]
            ];
        #retorno da busca para checagem de dados
        $retorno = Buscar('usuario', ['id_usuario', 'email', 'senha'], $criterio);

        #CRITERIO 1) se obter um retorno na busca maior que 0
        if(count($retorno) > 0) 
        {
            #CRITERIO 2) se o hash inserido for igual ao hash do banco
            if(crypt($senha,$salt) == $retorno[0]['senha']) 
            {
                $_SESSION['login']['usuario'] = $retorno[0];
                #CRITERIO 3) se a 'url_retorno' 
                if(!empty($_SESSION['url_retorno'])) 
                {
                    header('Location: ' . $_SESSION['url_retorno']);
                    $_SESSION['url_retorno'] = '';
                    exit;
                }
            }
        }
        break;

        //LOG OUT DO USUARIO
        case 'logout':
            session_destroy();
            break;


        //STATUS DO USUARIO
        case 'status':
            $id = (int)$id;
            $valor = (int)$valor;

            $dados = [
                'ativo'=> $valor
            ];

            $criterio = [
                ['id','=', $id]
            ];
            #funcao para ATIVAR o usuario
            Atualizar('usuario', $dados, $criterio);

            header('Location: ../usuarios.php');
            exit;
            break;


        //ADMINISTRADOR
        case 'adm':
            $id = (int)$id;
            $valor = (int)$valor;
            
            $dados = [
                'adm'=> $valor
            ];

            $criterio = [
                ['id', '=', $id] 
            ];
            #funcao para dar permissao ADM para o usuario
            Atualizar(
                'usuario',
                $dados,
                $criterio
            );

            header('Location: ../usuarios.php');
            exit;
            break;


    }
    header ('Location: ../index.php');
?>