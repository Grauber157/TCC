<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/class.css" rel="stylesheet">
    <link href="../styles/cabeça.css" rel="stylesheet">
    <link href="../styles/fonts.css" rel="stylesheet">
    <link href="../styles/media.css" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="../Material/images/favicon.ico">
    <title>Math Language - Turmas</title>
</head>
<body>
    <header>
        <div id="title">
            <h1 class="title-h1">Math</h1>
            <h1>Language</h1>
        </div>
        <ul>
            <a href="../pages/home.php"><li>Home</li></a>
            <a href="../pages/games.php"><li>Jogos</li></a>
            <a href="../pages/cont.php"><li>Conteúdos</li></a>
            <a href="../pages/turma.php"><li>Turmas</li></a>
            <a href="../pages/contact.php"><li>Contatos</li></a>
        </ul>

    </header>

<?php
    session_start();
    $usuario = $_SESSION['login'];

    
    echo "<h1>$usuario</h1>";

    $codigo_turma = $_POST["cod_turma"];
    $senha = $_POST["senha"];

    include('include/conexao.php');
    if (!$link) 
    {
        die("Conexão mal sucedida: " . mysqli_connect_error());
    }
    echo "Conexão bem sucedida\n";   
    ////REMOVER////
    
    #Função 'mysqli_prepare()' para preparar o comando SQL;
    #Comando para pegar o codigo, senha e nome da turma. De acordo com os dados fornecidos;
    #Os caracteres '?', são posições no comando SQL a ser preenchido na função 'mysqli_stmt_bind_param()';
    $stmt = mysqli_prepare($link, "SELECT codigo, senha_turma, nome_turma FROM turma WHERE codigo = ?");

    if($stmt)
    {
        #Função que substitui os '?' por variáveis;
        mysqli_stmt_bind_param($stmt, "s", $codigo_turma);
        #Executa o código SQL;
        mysqli_stmt_execute($stmt);
        #Pega os resultados do banco de dados, e adiciona nas variáveis;
        mysqli_stmt_bind_result($stmt, $codigo_banco, $senha_banco, $nome_turma);
        mysqli_stmt_fetch($stmt);
        
        #Checa a autenticidade dos dados fornecidos 
        if($codigo_turma == $codigo_banco and $senha == $senha_banco)
        {
            mysqli_stmt_close($stmt);

            $stmt = mysqli_prepare($link, "UPDATE usuario SET turma_codigo = ? WHERE nome_usuario = ?");
            
            mysqli_stmt_bind_param($stmt, "ss", $codigo_banco, $usuario);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_fetch($stmt);

            echo "Sucesso ao entrar na turma!<br>";
            echo "Bem vindo a Turma $nome_turma!<br>";

            mysqli_stmt_close($stmt);
        }
        else
        {
            mysqli_stmt_close($stmt);
            echo "Erro ao entrar na turma!<br>";
        }
        
        mysqli_close($link);
    }

?>

<main class="dashboard">
        <section class="ranking">
            <h2>Top 10 Usuários</h2>
            <ul>
                <li><span><?php echo "$usuario";?></span>
                    <span>pontuação<?php //echo "$pontuacao_geral";?></span>
                </li>
                <li><span><?php echo "$usuario";?></span>
                    <span>pontuação<?php //echo "$pontuacao_geral";?></span>
                </li>
                <li><span><?php echo "$usuario";?></span>
                    <span>pontuação<?php //echo "$pontuacao_geral";?></span>
                </li>
                <li><span><?php echo "$usuario";?></span>
                    <span>pontuação<?php //echo "$pontuacao_geral";?></span>
                </li>
                <li><span><?php echo "$usuario";?></span>
                    <span>pontuação<?php //echo "$pontuacao_geral";?></span>
                </li>
                <li><span><?php echo "$usuario";?></span>
                    <span>pontuação<?php //echo "$pontuacao_geral";?></span>
                </li>
                <li><span><?php echo "$usuario";?></span>
                    <span>pontuação<?php //echo "$pontuacao_geral";?></span>
                </li>
                <li><span><?php echo "$usuario";?></span>
                    <span>pontuação<?php //echo "$pontuacao_geral";?></span>
                </li>
                <li><span><?php echo "$usuario";?></span>
                    <span>pontuação<?php //echo "$pontuacao_geral";?></span>
                </li>
                <li><span><?php echo "$usuario";?></span>
                    <span>pontuação<?php //echo "$pontuacao_geral";?></span>
                </li>
                
                <!-- Repetir itens conforme necessário -->
            </ul>
        </section>
        
        <section class="actions">
            
            <div class="info">
                <h3>Turma - <?php echo "$nome_turma";?></h3>
                
                <h3>Professor: </h3>

                <h3>Usuários: </h3>
                <p><?php echo "$usuario";?></p>
            </div>

            <div class="turma-options">
                <a href="sair_turma.php" class="btn">Sair</a>
            </div>

        </section>
    </main>
    
    <footer>
    <div class="footer-content">
      <div class="contact-info">
        <h3>Contato</h3>
        <p><img src="../Material/images/phone.png" alt="Phone Icon"><a href="tel:+5518988136720"> (18) 98813-6720</a></p>
        <p><img src="../Material/images/email.png" alt="Email Icon"><a href="mailto:mathlanguagebri@gmail.com">mathlanguagebri@gmail.com</a></p></br>
      </div>

      <div class="about-info">
        <h3>Sobre nós</h3>
        <p>Lorem Ipsum é um texto padrão em latim usado na indústria de design gráfico e editoriação para preencher espaços de texto.</p>
      </div>
    
    </div>
    
    <div class="footer-bottom">
      <p id="copy">&copy; 2024 Ensino à Matemática. Todos os direitos reservados.</p></br>
      <div class="social-icons">
        <a href="https://github.com/Grauber157/TCC.git"><img src="../Material/images/githubb.png" alt="Github"></a>
        <a href="#"><img src="../Material/images/twitterr.png" alt="Twitter"></a>
        <a href="https://instagram.com/mathlanguage"><img src="../Material/images/instagramm.png" alt="Instagram"></a>
      </div>
    </div>
  </footer>

</body>
</html>