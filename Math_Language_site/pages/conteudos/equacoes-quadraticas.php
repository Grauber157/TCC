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
    <title>Equações de segundo grau</title>
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
    
    
    <h1>Equações de segundo grau</h1>
    <aside>
        <p>A equação do segundo grau recebe esse nome porque é uma equação polinomial cujo termo de maior grau está elevado ao quadrado. Também chamada de equação quadrática, é representada por:</p>
        <p>aX2 + bX + c = 0</p>
        <p>Numa equação do 2º grau, o x é a incógnita e representa um valor desconhecido. Já as letras a, b e c são chamadas coeficientes da equação. Os coeficientes são números reais e o coeficiente a tem que ser diferente de zero, pois do contrário passa a ser uma equação do 1º grau.</p>
        <p>bx + c = 0</p>
        <p>Resolver uma equação de segundo grau, significa determinar os valores reais de x, que tornam a equação verdadeira. Esses valores são denominados raízes da equação. Uma equação do segundo grau possui no máximo duas raízes reais.</p>
    </aside>
    <h1>Fórmula de Bhaskara</h1>
    <aside>
        <p>Quando uma equação do segundo grau é completa, usamos a Fórmula de Bhaskara para encontrar as raízes da equação. A fórmula é apresentada abaixo:</p>
        <img src="../components/images/f1.png" alt="">
        <p>Na fórmula de Bhaskara, aparece a letra grega Δ (delta), chamada discriminante da equação, pois conforme o seu valor é possível saber qual o número de raízes (soluções) que a equação terá. Para determinar o delta usamos a seguinte fórmula:</p>
        <img src="../components/images/f2.png" alt="">
    </aside>
    <h1>Passo a Passo</h1>
    <aside>
        <p>1º Passo: Identificar os coeficientes a, b e c.</p>
        <p>Nem sempre os termos da equação aparecem na mesma ordem, portanto, é importante saber identificar os coeficientes, independente da sequência em que estão. O coeficiente a é o número que está junto ao x2, o b é o número que acompanha o x e o c é o termo independente, ou seja, o número que aparece sem o x.</p>
        <p></p>
        <p>2º Passo: Calcular o delta.</p>
        <p>Para calcular as raízes é necessário conhecer o valor do delta. Para isso, substituímos as letras na fórmula pelos valores dos coeficientes. Podemos, a partir do valor do delta, saber previamente o número de raízes que terá a equação do 2º grau. Ou seja, se o valor de Δ for maior que zero (Δ > 0), a equação terá duas raízes reais e distintas. Se ao contrário, delta for menor que zero (Δ < 0), a equação não apresentará raízes reais e se for igual a zero (Δ = 0), a equação apresentará somente uma raiz.</p>
        <p></p>
        <p>3º Passo: Calcular as raízes.</p>
        <p>Se o valor encontrado para delta for negativo, não precisa fazer mais nenhum cálculo e a resposta será que a equação não possui raízes reais. Caso o valor do delta seja igual ou maior que zero, devemos substituir todas as letras pelos seus valores na fórmula de Bhaskara e calcular as raízes.</p>
    </aside>
    <h1>Exemplo</h1>
    <aside>
        <p>Determine as raízes da equação 2x2 - 3x - 5 = 0</p>
    </aside>
    <h1>Solução</h1>
    <aside>
        <p>Para resolver, primeiro devemos identificar os coeficientes, assim temos:</p>
        <p>a = 2</p>
        <p>b = -3</p>
        <p>c = -5</p>
        <p>Agora, podemos encontrar o valor do delta. Devemos tomar cuidado com as regras de sinais e lembrar que primeiro devemos resolver a potenciação e a multiplicação e depois a soma e a subtração.</p>
        <p>Δ = (- 3)2 - 4 . (- 5) . 2</p>
        <p>Δ = 9 + 40</p>
        <p>Δ = 49</p>
        <p>Como o valor encontrado é positivo, encontraremos dois valores distintos para as raízes. Assim, devemos resolver a fórmula de Bhaskara duas vezes. Temos então:</p>
        <img src="../components/images/f3.png" alt="">
        <p>Assim, as raízes da equação 2x2 - 3x - 5 = 0 são x = 5/2 e x = - 1.</p>
    </aside>
        
    <?php include '../../php/include/rodape.php'; ?>

  </body>
</html>