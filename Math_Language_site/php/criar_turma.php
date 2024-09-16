<?php
    include('include/conexao.php');
    include('include/gerador_codigo_turma.php');
    //session_start();
        
    echo $codigo_turma;
        
    $nome_turma = $_POST['nome'];
    $senha_turma = $_POST['senha'];


?>