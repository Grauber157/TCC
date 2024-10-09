<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/cabeça.css" rel="stylesheet">
    <link href="../styles/forms.css" rel="stylesheet" >
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
        <!--
        <ul>
            <a href="home.php"><li>Home</li></a>
            <a href="games.php"><li>Jogos</li></a>
            <a href="cont.php"><li>Conteúdo</li></a>
            <a href="turma.php"><li>Turmas</li></a>
            <a href="contact.php"><li>Contatos</li></a>
            <a href="cad.php" id="inscreva-se-btn"><li>Nao tem conta?</li></a>
        </ul>
        -->
    </header>
    <main>
        <aside class="form-aside">
            <div class="form-container">
            <p class="title">Conecte-se</p>
            <form class="form" action="../php/login_exe.php" method="post">
                <div class="input-group">
                    <label for="username">Login</label>
                    <input type="text" name="email" id="email" placeholder="Email ou Nickname">
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input type="password" name="senha" id="password" placeholder="Senha">
                </div>
                <input class="sign" type="submit" value="Login">
            </form>
            <p class="signup">Não tem conta?
                <a rel="noopener noreferrer" href="cad.php" class="">Cadastre-se</a>
            </p>
        </div>
    </aside>
    <article art-container>
        <div class="img">
            <img src="#" alt="">
        </div>
    </article>
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