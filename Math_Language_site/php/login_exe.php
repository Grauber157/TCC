<?php
    session_start();
    #Função para checar email
    require_once "../core/conexao_mysql.php";
    require_once '../core/usuario_repositorio.php';
    #Valores vindos do forms por meio das superglobais

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $retorno = Buscar('usuario', [$email, $senha]);

    if($retorno)
    {
        $_SESSION['login'];
    }

    #'Include()' para puxar os comandos do arquivo 'conexao_mysql.php'
    
?>