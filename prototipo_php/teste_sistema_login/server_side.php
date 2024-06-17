<?php
    //Valores vindos do forms por meio das superglobais
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    //Parâmetros para realizar a conexão com o banco de dados
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $link = mysqli_connect($hostname, $username, $password, "teste");

    //Checagem de conexão com o banco de dados
    if (!$link) 
    {
        die("Conexão mal sucedida: " . mysqli_connect_error());
    }
    echo "Conexão bem sucedida";

    //AREA DE TESTES *HEHEHEH*

    

    mysqli_query($link, "INSERT INTO usuario(email, senha) VALUES ('$email', '$senha');", MYSQLI_USE_RESULT);
?>