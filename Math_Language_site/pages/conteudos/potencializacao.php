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
    <title>Potencialização</title>
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
    
      <h1>Potencialização</h1>
      <aside>
        <p>A potenciação ou exponenciação é a operação matemática que representa a multiplicação de fatores iguais. Ou seja, usamos a potenciação quando um número é multiplicado por ele mesmo várias vezes. Para escrever um número na forma de potenciação usamos a seguinte notação:</p>
        <img src="../components/images/f4.png" alt="">
        <p>Sendo a ≠ 0, temos:</p>
        <p>a: Base (número que está sendo multiplicado por ele mesmo)</p>
        <p>n: Expoente (número de vezes que o número é multiplicado)</p>
        <p>Para melhor entender a potenciação, no caso do número 23 (dois elevado a terceira potência ou dois elevado ao cubo), tem-se:</p>
        <p>23 = 2 x 2 x 2 = 4 x 2 = 8</p>
        <p>Sendo,</p>
        <p>2: Base</p>
        <p>3: Expoente</p>
        <p>8: Potência (resultado do produto)</p>
      </aside>
      <h1>Exemplos de Potenciação</h1>
      <aside>
        <p>52: lê-se 5 elevado à segunda potência ou 5 ao quadrado, donde:</p>
        <p>5 x 5 = 25</p>
        <p>Logo,</p>
        <p>A expressão 52 equivale a 25.</p>
        <p>33: lê-se 3 elevado à terceira potência ou 3 ao cubo, donde:</p>
        <p>3 x 3 x 3 = 27</p>
        <p>Logo, a expressão 33 equivale a 27.</p>
      </aside>
      <h1>Propriedades da Potenciação</h1>
      <aside>
        <p>Toda potência com expoente igual a zero, o resultado será 1, por exemplo: 50=1</p>
        <p>Toda potência com expoente igual 1, o resultado será a própria base, por exemplo: 81 = 8</p>
        <p>Quando a base for negativa e o expoente um número ímpar, o resultado será negativo, por exemplo: (- 3)3 = (- 3) x (- 3) x (- 3) = - 27.</p>
        <p>Quando a base for negativa e o expoente um número par, o resultado será positivo, por exemplo: (- 2)2 = (- 2) x (- 2) = +4</p>
        <p>Quando o expoente for negativo, inverte-se a base e muda-se o sinal do expoente para positivo, por exemplo: (2)- 4 = (1/2)4 = 1/16</p>
        <p>Nas frações, tanto o numerador quanto o denominador ficam elevados ao expoente, por exemplo: (2/3)3 = (23 / 33) = 8/27</p>
      </aside>
      <h1>Multiplicação e Divisão de Potências</h1>
      <aside>
        <p>Na multiplicação das potências de bases iguais, mantém-se a base e soma-se os expoentes:</p>
        <p>ax . ay = ax+y</p>
        <p>52.53 = 52+3 = 55</p>
        <p>Na Divisão das potências de bases iguais, mantém-se a base e subtrai-se os expoentes:</p>
        <p>(ax) / (ay) = ax-y</p>
        <p>(53) / (52) = 53-2 = 51</p>
        <p>Quando a base está entre parênteses e há outro expoente fora (potência de potência), mantém-se a base e multiplicam-se os expoentes:</p>
        <p>(ax)y = ax.y</p>
        <p>(32)5= 32.5 = 310</p>
      </aside>
        
    <?php include '../../php/include/rodape.php'; ?>

  </body>
</html>