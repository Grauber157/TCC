<?php
    #Função pra manter as páginas logadas
    session_start();

    #Função para checar email
    function EmailCheck($email1, $email_banco1)
    {
        if($email1 == $email_banco1)
        {
            return true;
        }
        else
        {
            return false;
        }
    } 
    #Função para checar senha
    function PasswordCheck($senha1, $senha_banco1)
    {
        //password_verify() pega a senha digitada pelo usuário, e compara com a senha criptografada
        if(password_verify($senha1, $senha_banco1))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    #Valores vindos do forms por meio das superglobais
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    #'Include()' para puxar os comandos do arquivo 'conexao.php'
    include("include/conexao.php");

    #'mysqli_prepare()' prepara o código SQL para ser enviado
    #podendo ser armazenado em uma variável
    $stmt = mysqli_prepare($link, "SELECT email, apelido_usuario, senha, nome_usuario FROM usuario WHERE email = ? or apelido_usuario = ?");
    
    if($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $email, $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $email_banco, $apelido_banco, $senha_banco, $nome_usuario);
        mysqli_stmt_fetch($stmt);

        if(EmailCheck($email, $email_banco) and PasswordCheck($senha, $senha_banco))
        {
            //$_SESSION para manter usuário logado
            $_SESSION['usuario'] = $nome_usuario;
            echo "Login Concluido!<br>";
        }
        else
        {
            echo "<span>Erro nas credenciais de login!</span><br>";
            echo "Email: $email<br>";
            echo "Email Banco: $email_banco<br>";
            echo "Apelido Banco: $apelido_banco<br><br>";
            echo "Senha: $senha<br>"; 
            echo "Senha Banco: $senha_banco<br>";
        }
        mysqli_stmt_close($stmt);
    }
    else
    {
        echo "Erro" . mysqli_error($link);
    }
?>