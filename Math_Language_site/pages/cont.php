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
        <a href="cad.php" id="inscreva-se-btn"><li><?php echo "<h3>" . $_SESSION['login'] . "</h3>"; ?></li></a>
      </ul>
    </header>
    
    <main>
      <h1 style="text-align: center">Conteúdos</h1>
      <section class="sec-container">
        <div class="dis1">
          <div class="titulo1">
            <h1>Geometria Plana</h1>
          </div>
          <div class="texto1">
            <p>Geometria plana é a área da geometria que estuda as figuras planas</p>
          </div>
          <div class="imagem">
            <img src="../Material/images/img_cont/teste2.png" alt="Imagens de Geometria Plana">
          </div>
        </div>
      </section>
    </main>
    <footer>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ratione
        dolor delectus fugit tempore, sunt sequi! Quos, sint dolore debitis
        aliquid, sunt, veniam officiis blanditiis dolor maxime voluptate animi
        incidunt.
      </p>
      <ul>
        <li>Instagram</li>
      </ul>
    </footer>
  </body>
</html>