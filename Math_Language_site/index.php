<?php
    session_start();

    if(empty($_SESSION['login']))
    {
        header("Location: pages/login.php");
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
                <a href="pages/home.php"><li>Home</li></a>
                <a href="pages/games.php"><li>Jogos</li></a>
                <a href="pages/cont.php"><li>Ensino</li></a>
                <a href="pages/contact.php"><li>Contatos</li></a>
                <?php
                    //retira o bug do login
                    if(empty($_SESSION['login']))
                    {
                        echo "<a href='pages/login.php'><li>Login</li></a>";
                        echo "<a href='pages/cad.php' id='inscreva-se-btn'><li>Nao tem conta?</li></a>";
                    }
                ?>
                <!-- teste de $_SESSION -->
                <a href="cad.php" id="inscreva-se-btn"><li><?php echo "<h3>".$_SESSION['login']."</h3>"; ?></li></a>
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
    <div class="footer-content">
      <div class="contact-info">
        <h3>Contato</h3>
        <p><img src="Material/images/phone.png" alt="Phone Icon"><a href="tel:+5518988136720"> (18) 98813-6720</a></p>
        <p><img src="Material/images/email.png" alt="Email Icon"><a href="mailto:mathlanguagebri@gmail.com">mathlanguagebri@gmail.com</a></p></br>
      </div>

      <div class="about-info">
        <h3>Sobre nós</h3>
        <p>Lorem Ipsum é um texto padrão em latim usado na indústria de design gráfico e editoriação para preencher espaços de texto.</p>
      </div>
    
    </div>
    
    <div class="footer-bottom">
      <p id="copy">&copy; 2024 Ensino à Matemática. Todos os direitos reservados.</p></br>
      <div class="social-icons">
        <a href="https://github.com/Grauber157/TCC.git"><img src="Material/images/githubb.png" alt="Github"></a>
        <a href="#"><img src="Material/images/twitterr.png" alt="Twitter"></a>
        <a href="https://instagram.com/mathlanguage"><img src="Material/images/instagramm.png" alt="Instagram"></a>
      </div>
    </div>
  </footer>

</body>
</html>