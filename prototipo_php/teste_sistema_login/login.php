<?php
    #Função pra manter as páginas logadas
    session_start();
    #Valores vindos do forms por meio das superglobais
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    #Parâmetros para realizar a conexão com o banco de dados
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $link = mysqli_connect($hostname, $username, $password, "teste");

    #Checagem de conexão com o banco de dados
    if (!$link) 
    {
        die("Conexão mal sucedida: " . mysqli_connect_error());
    }
    echo "Conexão bem sucedida\n";

    ////AREA DE COISAS LOUCAS////

    #mysqli_prepare() prepara o código SQL para ser enviado
    #podendo ser armazenado em uma variável
    //$stmt = mysqli_prepare($link, "INSERT INTO usuario(email, senha) VALUES (?, ?);");
    $stmt = mysqli_prepare($link, "SELECT email, senha FROM usuario WHERE email = ?");
    
    if($stmt)
    {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $email_banco, $senha_banco);
        mysqli_stmt_fetch($stmt);
        if($email == $email_banco and $senha == $senha_banco)
        {
            echo "Login Concluido!";
        }
        else
        {
            echo "Erro nas credenciais de login!";
        }
        mysqli_stmt_close($stmt);
    }
    else
    {
        echo "Erro" . mysqli_error($link);
    }


?>