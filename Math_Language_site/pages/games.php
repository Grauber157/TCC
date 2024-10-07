<?php
session_start();

if (empty($_SESSION['login'])) {
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
  <link href="../styles/fonts.css" rel="stylesheet">
  <link href="../styles/media.css" rel="stylesheet">
  <link href="../styles/games.css" rel="stylesheet">
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
      <a href="home.php">
        <li>Home</li>
      </a>
      <a href="cont.php">
        <li>Conteúdo</li>
      </a>
      <a href="turma.php">
        <li>Turmas</li>
      </a>
      <a href="contact.php">
        <li>Contatos</li>
      </a>
      <!-- teste de $_SESSION -->
      <a href="cad.php" id="inscreva-se-btn">
        <li><?php echo "<h3>" . $_SESSION['login'] . "</h3>"; ?></li>
      </a>
    </ul>
  </header>
  <main>
    <h1>Jogos</h1>
    <article>
      <img src="#" alt="">
    </article>

    <!--seção teste-->
    <div class="game-container">

      <!--MATEMORIA-->
      <div class="game-section">
        <div class="game-section-img">
          <a href="games/matememoria.php"><img src="components/images/capa_matemória.png" alt="Matememoria"
              class="game-image"></a>
        </div>

        <h3 class="game-title">Matemória</h3>

        <p class="game-description">Use seus conhecimentos em contas matemáticas e sua memória para acertar as cartas
          que são correspondentes ao mesmo resultado.</p>
      </div>

      <!--CONTRA TEMPO-->
      <div class="game-section">
        <div class="game-section-img">
          <a href="games/contra-tempo.php"><img src="components/images/capa_contratempo.png" alt="Contra-Tempo"
              class="game-image"></a>
        </div>

        <h3 class="game-title">Contra-Tempo</h3>

        <p class="game-description">Uma conta em cima e dois possíveis resultados embaixo, seja ágil e ache o resultado
          para passar nas portas antes que o tempo acabe.</p>
      </div>

      <!--PLANAMENTE ESPACIAL-->
      <div class="game-section">
        <div class="game-section-img">
          <a href="games/planamente-espacial.php"><img src="components/images/capa_planamenteespacial.png"
              alt="Planamente Espacial" class="game-image"></a>
        </div>

        <h3 class="game-title">Planamente Espacial</h3>

        <p class="game-description">Você é desafiado a explorar formas 3D e calcular suas medidas, teste suas habilidades
          matemáticas enquanto desvenda as propriedades espaciais de cada figura.</p>
      </div>

    </div>


    <!--seção teste-->
    <div class="game-container">

      <!--ACHE O X-->
      <div class="game-section">
        <div class="game-section-img">
          <a href="games/ache-x.php"><img src="components/images/capa_achex.png" alt="Ache o X" class="game-image"></a>
        </div>

        <h3 class="game-title">Ache o X</h3>

        <p class="game-description">Você tem uma missão amigo! Nesse jogo de quem eu sou, fornecerei 3 dicas para você
          descobrir qual algarismo sou dentre as infinitas possibilidades .</p>
      </div>

      <!--...-->
      <div class="game-section">
        <div class="game-section-img">
          <a href="games/"><img src="" alt="" class="game-image"></a>
        </div>

        <h3 class="game-title">...</h3>

        <p class="game-description">...</p>
      </div>

      <!--...-->
      <div class="game-section">
        <div class="game-section-img">
          <a href="games/"><img src="" alt="" class="game-image"></a>
        </div>

        <h3 class="game-title">...</h3>

        <p class="game-description">...</p>
      </div>

    </div>

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