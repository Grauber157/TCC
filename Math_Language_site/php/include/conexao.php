<?php
    #Parâmetros para realizar a conexão com o banco de dados
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "math_language";
    $port = 3307;   //PC do DU = 3306, Normal = 3307;
    $link = mysqli_connect($hostname, $username, $password, $database, $port);

    //ERRO DE CONEXAO
    if(!$link)
    {
        echo 'Erro: Não foi possível conectar ao MySQL.' . PHP_EOL;
        echo 'Debugging errno: ' . mysqli_connect_errno() . PHP_EOL;
        echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
        return null;
    }
    return $link;
?>