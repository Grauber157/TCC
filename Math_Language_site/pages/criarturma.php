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
    <link href="../styles/class.css" rel="stylesheet">
    <link href="../styles/cabeça.css" rel="stylesheet">
    <link href="../styles/fonts.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/forms.css">
    <link href="../styles/media.css" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="../Material/images/favicon.ico">
    <title>Math Language - Criar Turma</title>
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
            <a href="cont.php"><li>Conteúdos</li></a>
            <a href="turma.php"><li>Turmas</li></a>
            <a href="contact.php"><li>Contatos</li></a>
            <!-- teste de $_SESSION -->
            <a href="#" id="inscreva-se-btn"><li><?php echo "<h3>".$_SESSION['login']."</h3>"; ?></li></a>
        </ul>
    </header>

    <main class="create-class">
        <aside class="form-aside">
            <div class="form-container">
            <p class="title">Criar uma Turma</p>
            <form class="form" action="../php/criar_turma.php" method="post">
                <div class="input-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome_turma" id="nome_turma" placeholder="Nome da Turma">
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Senha da Turma (min 8 caracteres)">
                </div>
                <input class="sign" type="submit" value="Criar">
            </form>
            <p class="signup">Ja esta em uma turma?
                <a rel="noopener noreferrer" href="entrarturma.php" class="">Entrar em uma turma</a>
            </p>
        </div>
    </aside>
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
