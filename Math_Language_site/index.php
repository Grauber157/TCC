<?php
    session_start();

    if(empty($_SESSION['login']))
    {
        header("Location: pages/login.html");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css"> 
    <link rel="stylesheet" href="styles/cabeça.css">
    <link href="styles/fonts.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/media.css">
    <link rel="shortcut icon" type="imagex/png" href="../Material/images/favicon.ico">
    <title>Math Language</title>
</head>
<body>
    <header>
            <div id="title">
                <h1 class="title-h1">Math</h1>
                <h1>Language</h1>
            </div>
            <div class="box_header">
            <ul>
                <a href="pages/home.html"><li>Home</li></a>
                <a href="pages/games.html"><li>Jogos</li></a>
                <a href="pages/class.html"><li>Ensino</li></a>
                <a href="pages/contact.html"><li>Contatos</li></a>
                <a href="pages/login.html"><li>Login</li></a>
                <a href="pages/cad.html" id="inscreva-se-btn"><li>Nao tem conta?</li></a>
                <!-- teste de $_SESSION -->
                <li><?php echo $_SESSION['login']; ?></li>
            </ul>
        </div>
        </header>
    <main>
        <aside>
            <h2><span>Faça parte</span></h2>
            <h2>do Math Language</h2>
            <p>
                Math Language é um Trabalho de Conclusão de Curso com o objetivo de facilitar e reforçar a aprendizagem da matemática básica no Brasil, por meio de mini-jogos interativos, visando o interesse e o incentivo ao conhecimento. Aqui você terá uma jornada extraordinária, se divertindo com nosso conteúdo, explorando o mundo da matemática e ainda assim aprendendo conceitos fundamentais para o nosso dia a dia.
            </p>
        </aside>
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
                <a href="https://github.com/Grauber157/TCC.git"><img src="Material/images/github.png" alt="Github"></a>
                <a href="#"><img src="Material/images/twitter.png" alt="Twitter"></a>
                <a href="https://instagram.com/mathlanguage"><img src="Material/images/instagram.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>
</body>
</html>