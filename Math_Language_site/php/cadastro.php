<?php
    #Função pra manter as páginas logadas
    session_start();
    #Valores vindos do forms por meio das superglobais
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha_confirmacao = $_POST["confirmar_senha"];
    $name = $_POST["name"];

    $nickname = $_POST["nickname"];
    $data = $_POST["data"];
    $ano_escolar = $_POST["ano_escola"];
    $nome_escola = $_POST["nome_escola"];

    if($senha == $senha_confirmacao and strlen($name) > 5)
    {
        #'Include()' para puxar os comandos do arquivo 'conexao.php'
        include("include/conexao.php");
        ////AREA DE TESTE////
        $stmt = mysqli_prepare($link, "INSERT INTO usuario(email, senha, nome_usuario, apelido_usuario, data_nascimento, ano_escolar, instituicao_escolar) VALUES(?, ?, ?, ?, ?, ?, ?)");

        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "sssssss", $email, $senha, $name, $nickname, $data, $ano_escolar, $nome_escola);
            mysqli_stmt_execute($stmt);
            echo "Dados enviados com Sucesso!\n";
            mysqli_stmt_close($stmt);
        }
        else
        {
            echo "Erro ao enviar os dados" . mysqli_error($link);
        }
    }
    else
    {
        echo "<span>Erro ao Cadastrar</span><br>";
    }
    

    
?>