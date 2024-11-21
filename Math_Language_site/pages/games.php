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
          <a href="#popup1"><img src="components/images/capa_matemória.png" alt="Matememoria"
              class="game-image"></a>
        </div>

        <h3 class="game-title">Matemória</h3>

        <p class="game-description">Use seus conhecimentos em contas matemáticas e sua memória para acertar as cartas
          que são correspondentes ao mesmo resultado.</p>
      </div>
        
      <!-- Simulação do pop-up de dificuldades -->
      <!-- Topo -->
      <?php
        include '../php/popup.php';
      ?>

      <!--CONTRA TEMPO-->
      <div class="game-section">
        <div class="game-section-img">
          <a href="games/contra-tempo.html"><img src="components/images/capa_contratempo.png" alt="Contra-Tempo"
              class="game-image"></a>
        </div>

        <h3 class="game-title">Contra-Tempo</h3>

        <p class="game-description">Uma conta em cima e dois possíveis resultados embaixo, seja ágil e ache o resultado
          para passar nas portas antes que o tempo acabe.</p>
      </div>

      <!--PLANAMENTE ESPACIAL-->
      <div class="game-section">
        <div class="game-section-img">
          <a href="games/planamente-espacial.html"><img src="components/images/capa_planamenteespacial.png"
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
          <!--Trocar o href desse jogo-->
          <a href="games/ache-x.html"><img src="components/images/capa_achex.png" alt="Ache o X" class="game-image"></a>
        </div>

        <h3 class="game-title">Ache o X</h3>

        <p class="game-description">Você tem uma missão amigo! Nesse jogo de quem eu sou, fornecerei 3 dicas para você
          descobrir qual algarismo sou dentre as infinitas possibilidades .</p>
      </div>

      <!--...-->
      <div class="game-section">
        <div class="game-section-img">
          <a href="#"><img src="" alt="" class="game-image"></a>
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
  
  <?php include '../php/include/rodape.php'; ?>

</body>

</html>