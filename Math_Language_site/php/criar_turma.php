<?php
    session_start();
    include("../core/conexao_mysql.php");
    #include() para gerar o código da turma
    include('include/gerador_codigo_turma.php');
        
    $nome_turma = $_POST['nome_turma'];
    $senha_turma = $_POST['senha'];
    //$descricao = $_POST['descricao'];

    //CHECAGEM DE POSSIVEIS DADOS JA EXISTENTES//
    $sql = "SELECT nome_turma FROM turma WHERE nome_turma = ?";
    $stmt = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($stmt, "s", $nome_turma);
    mysqli_stmt_execute($stmt);
    $check = mysqli_stmt_fetch($stmt);

    //ATRIBUIÇÃO DE ADM NA TURMA AO CRIAR//
    #
    $comando = "SELECT id_aluno FROM usuario WHERE nome_usuario = ?";
    $stmt2 = mysqli_prepare($conexao, $comando);
    mysqli_stmt_bind_param($stmt2, "s", $_SESSION['login']);
    mysqli_stmt_execute($stmt2);
    mysqli_stmt_bind_result($stmt2, $id_usuario);
    mysqli_stmt_fetch($stmt2);

    if($check == false)
    {
        //INSERÇÃO DE DADOS//
        $sql = "INSERT INTO turma(codigo, nome_turma, senha_turma) VALUES(?, ?, ?)";
        var_dump($sql);

        $stmt = mysqli_prepare($conexao, $sql);

        mysqli_stmt_bind_param($stmt, "sss", $codigo_turma, $nome_turma, $senha_turma);

        mysqli_stmt_execute($stmt);

        echo "Turma criada com sucesso! Código de turma: $codigo_turma";
    }
    else
    {
        echo "Nome de turma já esta em uso!";
    }
    
    header("Location: turma.php");

?>