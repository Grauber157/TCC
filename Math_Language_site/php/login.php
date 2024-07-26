<?php
    #Função pra manter as páginas logadas
    session_start();
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

        if(($email == $email_banco or $email == $apelido_banco) and ($senha == $senha_banco))
        {
            #teste de '$_SESSION[]'
            $_SESSION['apelido'] = $nome_usuario;
            echo "Login Concluido!<br>";
            #echo "<a href='../../prototipo_php/sistema_turma/teste.html'>Voltar</a>";
        }
        else
        {
            echo "<span>Erro nas credenciais de login!</span><br>";
            echo "$email // $email_banco<br>";
            echo "$apelido_banco<br>";
            echo "$senha // $senha_banco<br>";
        }
        mysqli_stmt_close($stmt);
    }
    else
    {
        echo "Erro" . mysqli_error($link);
    }
?>