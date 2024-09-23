<?php
    session_start();

    if(empty($_SESSION['login']))
    {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/cabeça.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/contact.css">
    <link href="../styles/fonts.css" rel="stylesheet">
    <link href="../styles/media.css" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="../Material/images/favicon.ico">
    <title>Math Language</title>
</head>
<body>
    <header>
        <div id="title">
            <h1 class="title-h1">Math</h1>
            <h1>Language</h1>
        </div>

        <ul>
            <a href="home.php"><li>Home</li></a>
            <a href="games.php"><li>Jogos</li></a>
            <a href="cont.php"><li>Conteúdo</li></a>
            <a href="turma.php"><li>Turmas</li></a>
            <!-- TESTE DE USUARIO -->
            <a href="cad.php" id="inscreva-se-btn"><li><?php echo "<h3>".$_SESSION['login']."</h3>"; ?></li></a>
        </ul>
    </header>
    <main>
        <h1>Contatos</h1>
        <article>
            <img src="#" alt="">
        </article>
    </main>
    <footer>
        <div class="footer-content1">
            <div class="contact-info">
                <h3>Contato</h3>
                <p>Email: <a href="mailto:mathlanguagebri@gmail.com">mathlanguagebri@gmail.com</a></p>
                <p>Telefone: <a href="tel:+5518988136720">(18) 98813-6720</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p id="copy">&copy; 2024 Ensino à Matemática. Todos os direitos reservados.</p>
            <div class="social-icons">
                <a href="https://github.com/Grauber157/TCC.git"><img src="../Material/images/github.png" alt="Github"></a>
                <a href="#"><img src="../Material/images/twitter.png" alt="Twitter"></a>
                <a href="https://instagram.com/mathlanguage"><img src="../Material/images/instagram.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>
</body>
</html>