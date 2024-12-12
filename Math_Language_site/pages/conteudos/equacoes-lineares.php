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
    <aside>
        <p>As equações de primeiro grau são sentenças matemáticas que estabelecem relações de igualdade entre termos conhecidos e desconhecidos, representadas sob a forma:</p>
        <p>ax+b = 0</p>
        <p>Donde a e b são números reais, sendo a um valor diferente de zero (a ≠ 0) e x representa o valor desconhecido. O valor desconhecido é chamado de incógnita que significa "termo a determinar". As equações do 1º grau podem apresentar uma ou mais incógnitas. As incógnitas são expressas por uma letra qualquer, sendo que as mais utilizadas são x, y, z. Nas equações do primeiro grau, o expoente das incógnitas é sempre igual a 1.</p>
        <p>As igualdades 2.x = 4, 9x + 3 y = 2 e 5 = 20a + b são exemplos de equações do 1º grau. Já as equações 3x2+5x-3 =0, x3+5y= 9 não são deste tipo. O lado esquerdo de uma igualdade é chamado de 1º membro da equação e o lado direito é chamado de 2º membro.</p>
    </aside>
    <h1>Como resolver uma equação de primeiro grau?</h1>
    <aside>
        <p>O objetivo de resolver uma equação de primeiro grau é descobrir o valor desconhecido, ou seja, encontrar o valor da incógnita que torna a igualdade verdadeira. Para isso, deve-se isolar os elementos desconhecidos em um dos lados do sinal de igual e os valores constantes do outro lado. Contudo, é importante observar que a mudança de posição desses elementos deve ser feita de forma que a igualdade continue sendo verdadeira. Quando um termo da equação mudar de lado do sinal de igual, devemos inverter a operação. Assim, se tiver multiplicando, passará dividindo, se tiver somando, passará subtraindo e vice-versa.</p>
    </aside>
    <h1>Exemplo</h1>
    <aside>
        <p>Qual o valor da incógnita x que torna a igualdade 8x - 3 = 5 verdadeira?</p>
    </aside>
    <h1>Solução</h1>
    <aside>
        <p>Para resolver a equação, devemos isolar o x. Para isso, vamos primeiro passar o 3 para o outro lado do sinal de igual. Como ele está subtraindo, passará somando. Assim:</p>
        <p>8x = 5 + 3</p>
        <p>8x = 8</p>
        <p>Agora podemos passar o 8, que está multiplicando o x, para o outro lado dividindo:</p>
        <p>x = 8/8</p>
        <p>x = 1</p>
        <p>Outra regra básica para o desenvolvimento das equações de primeiro grau determina o seguinte:</p>
        <p>Se a parte da variável ou a incógnita da equação for negativa, devemos multiplicar todos os membros da equação por –1. Por exemplo:</p>
        <p>– 9x = – 90 . (-1)</p>
        <p>9x = 90</p>
        <p>x = 90/9</p>
        <p>x = 10</p>
    </aside>
        
    <?php include '../../php/include/rodape.php'; ?>

  </body>
</html>