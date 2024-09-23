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
    <title>Math Language - Entrar em Turma</title>
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
            <a href="contact.php"><li>Contatos</li></a>
            <!-- teste de $_SESSION -->
            <a href="cad.php" id="inscreva-se-btn"><li><?php echo "<h3>".$_SESSION['login']."</h3>"; ?></li></a>
        </ul>
    </header>

    <main>
        <aside class="form-aside">
            <div class="form-container">
            <p class="title">Entrar em uma Turma</p>
            <form class="form" action="../php/entrar_turma.php" method="post">
                <div class="input-group">
                    <label for="codigo">Codigo</label>
                    <input type="text" name="cod_turma" id="cod_turma" placeholder="Codigo da Turma">
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Senha da Turma (min 8 caracteres)">
                </div>
                <input class="sign" type="submit" value="Entrar">
            </form>
            <p class="signup">Nao esta em nenhuma turma?
                <a rel="noopener noreferrer" href="criarturma.html" class="">Crie uma turma</a>
            </p>
        </div>
    </aside>
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
