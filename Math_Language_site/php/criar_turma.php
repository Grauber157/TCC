<?php
    session_start();
    include('include/conexao.php');
    #include() para gerar o código da turma
    include('include/gerador_codigo_turma.php');
        
    $nome_turma = $_POST['nome'];
    $senha_turma = $_POST['senha'];
    $descricao = $_POST['descricao'];

    //CHECAGEM DE POSSIVEIS DADOS JA EXISTENTES//
    $sql = "SELECT nome FROM turma";

    $stmt = mysqli_stmt_prepare($link, $sql);

    if()
    {
        //INSERÇÃO DE DADOS//
        $sql = "INSERT INTO turma(codigo, nome_turma, senha_turma, descricao) VALUES(?, ?, ?, ?)";

        $stmt = mysqli_stmt_prepare($link, $sql);
    }
    
?>