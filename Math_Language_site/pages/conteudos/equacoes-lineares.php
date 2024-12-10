<?php
    session_start();

    //if(empty($_SESSION['login']))
    //{
        //header("Location: login.php");
    //}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Equações de primeiro grau</title>
    <link href="../../styles/cabeça.css" rel="stylesheet">
    <link href="../../styles/fonts.css" rel="stylesheet">
    <link href="../../styles/media.css" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/cont.css">
    <link rel="shortcut icon" type="imagex/png" href="../../Material/images/favicon.ico">
    <link
      rel="shortcut icon"
      type="imagex/png"
      href="../../Material/images/favicon.ico">
  </head>
  <body>
    
  <?php include '../../php/include/menu.php'; ?>

    <h1>Equações de primeiro grau</h1>  
    <main>
        <p>As equações de primeiro grau são sentenças matemáticas que estabelecem relações de igualdade entre termos conhecidos e desconhecidos, representadas sob a forma:</p>
        <p>ax+b = 0</p>
        <p>Donde a e b são números reais, sendo a um valor diferente de zero (a ≠ 0) e x representa o valor desconhecido.</p>
        <p>O valor desconhecido é chamado de incógnita que significa "termo a determinar". As equações do 1º grau podem apresentar uma ou mais incógnitas.</p>
        <p>As incógnitas são expressas por uma letra qualquer, sendo que as mais utilizadas são x, y, z. Nas equações do primeiro grau, o expoente das incógnitas é sempre igual a 1.</p>
        <p>As igualdades 2.x = 4, 9x + 3 y = 2 e 5 = 20a + b são exemplos de equações do 1º grau. Já as equações 3x2+5x-3 =0, x3+5y= 9 não são deste tipo.</p>
        <p>O lado esquerdo de uma igualdade é chamado de 1º membro da equação e o lado direito é chamado de 2º membro.</p>
    </main>
        
    <?php include '../../php/include/rodape.php'; ?>

  </body>
</html>