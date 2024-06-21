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

    ////AREA DE TESTE////
    $stmt = mysqli_prepare($link, "INSERT INTO usuario(email, senha) VALUES(?, ?)");

    if($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $email, $senha);
        mysqli_stmt_execute($stmt);
        echo "Dados enviados com Sucesso!\n";
        mysqli_stmt_close($stmt);
    }
    else
    {
        echo "Erro ao enviar os dados" . mysqli_error($link);
    }
?>