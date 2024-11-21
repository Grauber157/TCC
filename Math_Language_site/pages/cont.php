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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Conteudo</title>
    <link href="../styles/cabeça.css" rel="stylesheet">
    <link href="../styles/fonts.css" rel="stylesheet">
    <link href="../styles/media.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/cont.css">
    <link rel="shortcut icon" type="imagex/png" href="../Material/images/favicon.ico">
    <link
      rel="shortcut icon"
      type="imagex/png"
      href="../Material/images/favicon.ico">
  </head>
  <body>
    
  <?php include '../php/include/menu.php'; ?>
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
        <a href="#" id="inscreva-se-btn"><li><?php echo "<h3>" . $_SESSION['login'] . "</h3>"; ?></li></a>
      </ul>
    </header>
    
    <main>
      <h1>Conteúdos</h1>

      <div class="game-container">

      <!--Geometria Plana-->
      <div class="game-section">
        <div class="game-section-img">
          <a href="conteudos/1.php"><img src="../Material/images/lorem.png" alt="#"
              class="game-image"></a>
        </div>

        <h3 class="game-title">Geometria Plana</h3>

        <p class="game-description">A Geometria plana estuda formas bidimensionais, como triângulos, quadrados e círculos, focando em suas propriedades e relações entre ângulos, áreas e perímetros.</p>
      </div>

      <!--Geometria Espacial-->
      <div class="game-section">
        <div class="game-section-img">
          <a href="#"><img src="../Material/images/lorem.png" alt="#"
              class="game-image"></a>
        </div>

        <h3 class="game-title">Geometria Espacial</h3>

        <p class="game-description">A Geometria espacial estuda formas tridimensionais, como cubos, esferas e pirâmides, analisando volume, área da superfície e suas relações espaciais.</p>
      </div>
    </div>

    <div class="game-container">

      <!--Equações do Primeiro Grau-->
      <div class="game-section">
        <div class="game-section-img">
          <a href="#"><img src="../Material/images/lorem.png" alt="#"
              class="game-image"></a>
        </div>

        <h3 class="game-title">Equações do Primeiro Grau</h3>

        <p class="game-description">As Equações de 1º grau são expressões algébricas que envolvem incógnitas elevadas à primeira potência, resolvendo problemas com soluções diretas.</p>
      </div>

      <!--Equações do Segundo Grau-->
      <div class="game-section">
        <div class="game-section-img">
          <a href="#"><img src="../Material/images/lorem.png" alt="#"
              class="game-image"></a>
        </div>

        <h3 class="game-title">Equações do Segundo Grau</h3>

        <p class="game-description">As Equações de 2º grau envolvem incógnitas elevadas ao quadrado, exigindo técnicas como a fórmula de Bhaskara para encontrar suas soluções.</p>
      </div>
    </div>
    <div class="game-container">

      <!--Potencialização-->
      <div class="game-section">
        <div class="game-section-img">
          <a href="#"><img src="../Material/images/lorem.png" alt="#"
              class="game-image"></a>
        </div>

        <h3 class="game-title">Potencialização</h3>

        <p class="game-description">A Potenciação é uma operação matemática que eleva um número a uma determinada potência, multiplicando-o por si mesmo várias vezes.</p>
      </div>

      <!--Radiciação-->
      <div class="game-section">
        <div class="game-section-img">
          <a href="#"><img src="../Material/images/lorem.png" alt="#"
              class="game-image"></a>
        </div>

        <h3 class="game-title">Radiciação</h3>

        <p class="game-description">A Radiciação é um processo inverso da potenciação, encontrando um número que, elevado a uma potência, resulta em um valor específico.</p>
      </div>
    </div>

  </main>
        
    <?php include '../php/include/rodape.php'; ?>

  </body>
</html>