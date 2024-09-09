<?php
    session_start();

    include('../php/include/conexao.php');
    include('../php/include/gerador_codigo_turma.php');

    $nome_turma = $_POST["nome"];
    $senha_turma = $_POST["senha"];

    echo $codigo_turma;
    
?>