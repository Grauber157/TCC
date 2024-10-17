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
    
    <main>
      <h1>Conteúdos</h1>
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
        
    <?php include '../php/include/rodape.php'; ?>

  </body>
</html>