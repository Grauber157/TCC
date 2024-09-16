<?php
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
?>