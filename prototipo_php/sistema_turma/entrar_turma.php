<?php
    session_start();
    $usuario = $_SESSION["apelido"];
    echo "<h1>$usuario</h1>";

    $codigo_turma = $_POST["codigo_turma"];
    $senha = $_POST["senha"];

    ////REMOVER (substituir pelo 'include()')////

    #Parâmetros para realizar a conexão com o banco de dados
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "math_language";
    $port = 3306;
    $link = mysqli_connect($hostname, $username, $password, $database, $port);
    #Checagem de conexão com o banco de dados
    if (!$link) 
    {
        die("Conexão mal sucedida: " . mysqli_connect_error());
    }
    echo "Conexão bem sucedida\n";   
    ////REMOVER////
    
    $stmt = mysqli_prepare($link, "SELECT codigo, senha_turma, nome_turma FROM turma WHERE codigo = ? and senha_turma = ?");

    if($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $codigo_turma, $senha);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $codigo_banco, $senha_banco, $nome_turma);
        mysqli_stmt_fetch($stmt);
        

        if($codigo_turma == $codigo_banco and $senha == $senha_banco)
        {
            mysqli_stmt_close($stmt);

            $stmt = mysqli_prepare($link, "UPDATE usuario SET codigo_turma = ? WHERE nome_usuario = ?");
            
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
        
        mysqli_close($link);
    }


?>