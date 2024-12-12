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
    <title>Radiciação</title>
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
      
    <h1>Radiciação</h1>
    <aside>
      <p>A radiciação, assim como todas as operações do conjunto dos números reais, possui seu inverso, ou seja, quando pegamos um elemento e operamos com seu inverso, o resultado é igual ao elemento neutro. A adição possui a subtração como operação inversa, a multiplicação possui a divisão como operação inversa, e a potenciação também vai possuir sua operação inversa, que é denominada de radiciação. Como as demais operações, a radiciação também possui uma série de propriedades, vejamos.</p>
    </aside>
    <h1>Representação da Radiciação</h1>
    <aside>
      <p>A radiciação é uma operação em que buscamos um número que satisfaz determinada potência. Considere os números a e b números reais e n um número racional, definimos a raiz n-ésima de a como sendo um número que, quando elevado a n, seja igual ao número a, nesse caso, representado por b, ou seja:</p>
      <img src="../components/images/f32.png" alt="">
    </aside>
    <h1>Propriedades da radiciação</h1>
    <aside>
      <p>Assim como na potenciação, temos algumas propriedades na radiciação. Nesta a história é a mesma, uma vez que ambas são operações inversas.</p>
      <img src="../components/images/f32.png" alt="">
      <p>Raiz em que o expoente do radicando é igual ao índice:</p>
      <img src="../components/images/f33.png" alt="">
      <p>Potência de expoente radical:</p>
      <img src="../components/images/f34.png" alt="">
      <p>Produto de raízes de índices iguais:</p>
      <img src="../components/images/f35.png" alt="">
      <p>Quociente de raízes de índices iguais:</p>
      <img src="../components/images/f36.png" alt="">
      <p>Potência de uma raiz:</p>
      <img src="../components/images/f37.png" alt="">
      <p>Raiz de outra raiz:</p>
      <img src="../components/images/f38.png" alt="">
      <p>Simplificação de raízes:</p>
      <img src="../components/images/f39.png" alt="">
    </aside>
          
    <?php include '../../php/include/rodape.php'; ?>

  </body>
</html>