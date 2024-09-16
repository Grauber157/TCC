<?php
    session_start();
    include('include/conexao.php');
    #include() para gerar o código da turma
    include('include/gerador_codigo_turma.php');
        
    $nome_turma = $_POST['nome'];
    $senha_turma = $_POST['senha'];
    $descricao = $_POST['descricao'];

    //CHECAGEM DE POSSIVEIS DADOS JA EXISTENTES//
    $sql = "SELECT nome_turma FROM turma WHERE nome_turma = ?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "s", $nome_turma);
    mysqli_stmt_execute($stmt);
    //mysqli_stmt_bind_result($stmt, $nome_banco);
    $check = mysqli_stmt_fetch($stmt);

    if($check == false)
    {
        //INSERÇÃO DE DADOS//
        $sql = "INSERT INTO turma(codigo, nome_turma, senha_turma, descricao) VALUES(?, ?, ?, ?)";

        $stmt = mysqli_prepare($link, $sql);

        mysqli_stmt_bind_param($stmt, "ssss", $codigo_turma, $nome_turma, $senha_turma, $descricao);

        mysqli_stmt_execute($stmt);

        mysqli_stmt_fetch($stmt);

        echo "Turma criada com sucesso! Código de turma: $codigo_turma";
    }
    else
    {
        echo "Nome de turma já esta em uso!";
    }
    
?>