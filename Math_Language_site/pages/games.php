<?php
session_start();

  if(empty($_SESSION['id']))
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
  <link href="../styles/cabeça.css" rel="stylesheet" >
  <link href="../styles/fonts.css" rel="stylesheet">
  <link href="../styles/media.css" rel="stylesheet">
  <link href="../styles/games.css" rel="stylesheet">
  <link href="../styles/popup.css" rel="stylesheet">
  <link rel="shortcut icon" type="imagex/png" href="../Material/images/favicon.ico">
  <title>Math Language</title>
</head>
<body>
  
  <?php include '../php/include/menu.php'; ?>

  <main>
  <h1>Jogos</h1>

  <!--seção teste-->
  <div class="game-container">

    <!--MATEMORIA-->
    <div class="game-section">
      <div class="game-section-img">
        <!-- Agora abrimos o pop-up com um POST para o jogo selecionado -->
        <form action="#popup1" method="POST">
          <input type="hidden" name="jogo" value="matemoria">
          <button type="submit"><img src="components/images/capa_matemória.png" alt="Matememoria" class="game-image"></button>
        </form>
      </div>
      <h3 class="game-title">Matemória</h3>
      <p class="game-description">Use seus conhecimentos em contas matemáticas e sua memória para acertar as cartas
        que são correspondentes ao mesmo resultado.</p>
    </div>

    <!-- Pop-up para todos os jogos -->
    <?php include '../php/popup.php'; ?>

    <!--CONTRA TEMPO-->
    <div class="game-section">
      <div class="game-section-img">
        <!-- Passando o nome do jogo como parâmetro -->
        <form action="#popup1" method="POST">
          <input type="hidden" name="jogo" value="contratempo">
          <button type="submit"><img src="components/images/capa_contratempo.png" alt="Contra-Tempo" class="game-image"></button>
        </form>
      </div>
      <h3 class="game-title">Contra-Tempo</h3>
      <p class="game-description">Uma conta em cima e dois possíveis resultados embaixo, seja ágil e ache o resultado
        para passar nas portas antes que o tempo acabe.</p>
    </div>

    <!-- Pop-up para todos os jogos -->
    <?php include '../php/popup.php'; ?>

  </div>

  <!--seção teste-->
  <div class="game-container">

    <!--PLANAMENTE ESPACIAL-->
    <div class="game-section">
      <div class="game-section-img">
        <form action="#popup1" method="POST">
          <input type="hidden" name="jogo" value="planamenteespacial">
          <button type="submit"><img src="components/images/capa_planamenteespacial.png" alt="Planamente Espacial" class="game-image"></button>
        </form>
      </div>
      <h3 class="game-title">Planamente Espacial</h3>
      <p class="game-description">Você é desafiado a explorar formas 3D e calcular suas medidas, teste suas habilidades
        matemáticas enquanto desvenda as propriedades espaciais de cada figura.</p>
    </div>

    <!-- Pop-up para todos os jogos -->
    <?php include '../php/popup.php'; ?>

    <!--ACHE O X-->
    <div class="game-section">
      <div class="game-section-img">
        <form action="#popup1" method="POST">
          <input type="hidden" name="jogo" value="acheox">
          <button type="submit"><img src="components/images/capa_achex.png" alt="Ache o X" class="game-image"></button>
        </form>
      </div>
      <h3 class="game-title">Ache o X</h3>
      <p class="game-description">Você tem uma missão amigo! Nesse jogo de quem eu sou, fornecerei 3 dicas para você
        descobrir qual algarismo sou dentre as infinitas possibilidades.</p>
    </div>

    <!-- Pop-up para todos os jogos -->
    <?php include '../php/popup.php'; ?>

  </div>

</main>


  
  <?php include '../php/include/rodape.php'; ?>

</body>
</html>