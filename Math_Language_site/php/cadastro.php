<?php
    #Função pra manter as páginas logadas
    session_start();
    #'Include()' para puxar os comandos do arquivo 'conexao.php'
    include("include/conexao.php");
    #Valores vindos do forms por meio das superglobais
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha_confirmacao = $_POST["confirmar_senha"];
    $name = $_POST["name"];

    $nickname = $_POST["nickname"];
    $data = $_POST["data"];
    $ano_escolar = $_POST["ano_escola"];
    $nome_escola = $_POST["nome_escola"];

    if($senha == $senha_confirmacao and strlen($name) >= 5)
    {
        #Sistema para checar se o email já esta sendo utilizado
        $stmt = mysqli_prepare($link, "SELECT email FROM usuario WHERE email = ?");
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $email_checagem);
        mysqli_stmt_fetch($stmt);
        if ($email <> $email_checagem)
        {
            
            #Sistema de Hash
            $hash = password_hash($senha, PASSWORD_DEFAULT);
            $stmt = mysqli_prepare($link, "INSERT INTO usuario(email, senha, nome_usuario, apelido_usuario, data_nascimento, ano_escolar, instituicao_escolar) VALUES(?, ?, ?, ?, ?, ?, ?)");

            if($stmt)
            {
                mysqli_stmt_bind_param($stmt, "sssssss", $email, $hash, $name, $nickname, $data, $ano_escolar, $nome_escola);
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
            echo "Este email já está em uso!\n";
        }
        
    }
    else
    {
        echo "<span>Erro ao Cadastrar</span><br>";
    }
    

    
?>