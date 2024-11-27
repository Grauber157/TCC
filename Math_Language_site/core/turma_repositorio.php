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
            $criterio = [['id', '=', $_SESSION['id']]];
            #verifica se o usuario já esta em uma turma
            $retorno = Buscar('usuario', ['turma_codigo'], $criterio);
            var_dump($retorno);
            if(!isset($retorno[0]['turma_codigo']) || is_null($retorno[0]['turma_codigo']))
            {
                #criterio para a verificacao
                $criterio = [['nome_turma', '=', $nome_turma]];
                #verifica se já existe uma turma com mesmo nome
                $retorno = Buscar('turma', ['nome_turma'], $criterio);
                if(!count($retorno) > 0)
                {
                    //Gera o $codigo_turma
                    require_once 'gerador_codigo_turma.php';
                    $codigo = GerarCodigo();
                    #atribuicao de dados
                    $dados = [
                        #funcao 'GerarCodigo()' gera o codigo da turma
                        'codigo' => $codigo,
                        'nome_turma' => $nome_turma,
                        #criptografa a senha
                        'senha_turma' => crypt($senha, $salt),
                        'administrador' => $_SESSION['id'],
                        ];
                    #funcao inserir
                    Inserir('turma', $dados);
                    #funcao atualizar
                    $criterio = [['id', '=', $_SESSION['id']]];
                    Atualizar('usuario', ['turma_codigo' => $codigo], $criterio);
                    header('location: ../index.php');
                    #encerra o script
                    exit;
                }
                #em caso do nome já estar em uso
                else
                {
                    $erro = 'Nome de turma já está em uso!';
                }
            }
            #em caso do usuario já estar em uma turma
            else
            {
                $erro = 'Você já está em uma turma!';
            }
            
        break;


        //ATUALIZA A TURMA NO BANCO #improvavel de mexer
        case 'atualizar':
            #id para identificar a turma na tabela
            $id = (int)$id;
            $dados = [
                'nome_turma' => $nome,
                'descricao_turma' => $descricao_turma,
            ];
                
            $criterio = [['id', '-', $id]];
            #funcao atualiza
            Atualizar('turma', $dados, $criterio);
        break;


        //ENTRAR NA TURMA
        case 'entrar':
            #criterio para a verificacao
            $criterio = [['id', '=', $_SESSION['id']]];
            #verifica se o usuario já esta em uma turma
            $retorno = Buscar('usuario', ['turma_codigo'], $criterio);
            if(!isset($retorno[0]['turma_codigo']) || is_null($retorno[0]['turma_codigo']))
            {
                #criterio para checagem
                $criterio = [['codigo', '=', $codigo]];
                #retorno da busca para checagem de dados
                $retorno = Buscar('turma', ['codigo', 'nome_turma', 'senha_turma'], $criterio);
                #CRITERIO 1) se obter um retorno na busca maior que 0
                if(count($retorno) > 0)
                {
                    #CRITERIO 2) se o hash inserido for igual ao hash do banco
                    if(crypt($senha_turma, $salt) == $retorno[0]['senha_turma'])
                    {
                        #muda a coluna 'codigo_turma' do 'USUARIO', adicionando o codigo da turma
                        Atualizar('usuario', ['turma_codigo' => $codigo], [['id', '=', $_SESSION['id']]]);
                        header ('Location: ../index.php');
                        exit;
                    }
                }
            }
            else
            {
                $erro = 'Você já está em uma turma!';
            }
        break;


        //LOG OUT DO USUARIO #precisa adaptar para as turmas
        case 'sair':
            #anular o campo 'turma_codigo' da tabela 'usuario' do BnD
        break;

    }

    if($erro <> null)
    {
        echo "<span>$erro</span>";
    }
    #header ('Location: ../index.php');
?>