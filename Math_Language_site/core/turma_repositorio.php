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
            #criterio para a verificacao
            $criterio = [['nome_turma', '=', $nome_turma]];
            #verifica se já existe uma turma com mesmo nome
            $retorno = Buscar('turma', ['nome_turma'], $criterio);
            if(!count($retorno) > 0)
            {
                //Gera o $codigo_turma
                require_once 'gerador_codigo_turma.php';
                #atribuicao de dados
                $dados = [
                    #funcao 'GerarCodigo()' gera o codigo da turma
                    'codigo' => GerarCodigo(),
                    'nome_turma' => $nome_turma,
                    #criptografa a senha
                    'senha_turma' => crypt($senha, $salt),
                    ];
                    #funcao inserir
                Inserir('turma', $dados);
                header('location: ../pages/entrarturma.php');
            }
            #em caso do nome já estar em uso
            else
            {
                $erro = 'Nome de turma já está em uso!';
            }
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
    if($erro <> null)
    {
        echo "<span>$erro</span>";
    }
    #header ('Location: ../index.php');
?>