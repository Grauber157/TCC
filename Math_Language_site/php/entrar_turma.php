<?php
    session_start();
    $usuario = $_SESSION['login'];

    
    echo "<h1>$usuario</h1>";

    $codigo_turma = $_POST["cod_turma"];
    $senha = $_POST["senha"];

    include("../core/conexao_mysql.php");
    if (!$conexao) 
    {
        die("Conexão mal sucedida: " . mysqli_connect_error());
    }
    echo "Conexão bem sucedida\n";   
    ////REMOVER////
    
    #Função 'mysqli_prepare()' para preparar o comando SQL;
    #Comando para pegar o codigo, senha e nome da turma. De acordo com os dados fornecidos;
    #Os caracteres '?', são posições no comando SQL a ser preenchido na função 'mysqli_stmt_bind_param()';
    $stmt = mysqli_prepare($conexao, "SELECT codigo, senha_turma, nome_turma FROM turma WHERE codigo = ?");

    if($stmt)
    {
        #Função que substitui os '?' por variáveis;
        mysqli_stmt_bind_param($stmt, "s", $codigo_turma);
        #Executa o código SQL;
        mysqli_stmt_execute($stmt);
        #Pega os resultados do banco de dados, e adiciona nas variáveis;
        mysqli_stmt_bind_result($stmt, $codigo_banco, $senha_banco, $nome_turma);
        mysqli_stmt_fetch($stmt);
        
        #Checa a autenticidade dos dados fornecidos 
        if($codigo_turma == $codigo_banco and $senha == $senha_banco)
        {
            mysqli_stmt_close($stmt);

            $stmt = mysqli_prepare($conexao, "UPDATE usuario SET turma_codigo = ? WHERE nome_usuario = ?");
            
            mysqli_stmt_bind_param($stmt, "ss", $codigo_banco, $usuario);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_fetch($stmt);

            echo "Sucesso ao entrar na turma!<br>";
            echo "Bem vindo a Turma $nome_turma!<br>";

            mysqli_stmt_close($stmt);
        }
        else
        {
            mysqli_stmt_close($stmt);
            echo "Erro ao entrar na turma!<br>";
        }
        
        mysqli_close($conexao);
    }

    header("Location: turma.php");
?>