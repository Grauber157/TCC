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
    <title>Geometria Espacial</title>
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
    
      <h1>Geometria Espacial</h1>
      <aside>
        <p>A Geometria Espacial é a parte da matemática que estuda formas com três dimensões. Ela lida com objetos que ocupam espaço, como cubos e esferas. De modo geral, a Geometria Espacial pode ser definida como o estudo da geometria no espaço. A geometria espacial é bastante utilizada em campos de estudo como: arquitetura, engenharia e design, onde é fundamental para projetar e construir estruturas, criar modelos tridimensionais e realizar cálculos precisos de volumes e áreas. Além disso, a geometria espacial desempenha um papel importante em ciências naturais e engenharia, como na astronomia para mapear o espaço e na geologia para modelar terrenos. É fundamental em sistemas de navegação, como o GPS, para calcular posições e rotas, e também é aplicada em áreas como a medicina para criar imagens detalhadas do corpo humano. Outro campo de estudo da geometria lida com figuras planas, como triângulos e círculos. A geometria plana estuda figuras com duas dimensões.</p>
      </aside>
      <h1>Características da geometria espacial</h1>
      <aside>
        <p>A Geometria Espacial estuda os objetos que possuem mais de duas dimensões e ocupam lugar no espaço. Por sua vez, esses objetos são conhecidos como “sólidos geométricos” ou “figuras geométricas espaciais”. Dessa forma, a geometria espacial pode determinar, por meio de cálculos, o volume destes objetos, ou seja, o espaço ocupado por eles. Contudo, o estudo das estruturas das figuras espaciais e suas inter-relações é determinado por alguns conceitos básicos, a saber:</p>
        <p>Ponto: conceito fundamental a todos os subsequentes, uma vez que todos sejam, em última análise, formados por inúmeros pontos. Por sua vez, os pontos são infinitos e não possuem dimensão mensurável (adimensional). Portanto, sua única propriedade garantida é sua localização.</p>
        <p>Reta: composta por pontos, é infinita nos dois lados e determina a distância mais curta entre dois pontos determinados.</p>
        <p>Linha: possui algumas semelhanças com a reta, ao ser igualmente infinita para cada lado, contudo, têm a propriedade de formar curvas e nós sobre si.</p>
        <p>Plano: é outra estrutura infinita que se estende em todas as direções.</p>
      </aside>
      <h1>Cubo</h1>
      <aside>
        <p>O cubo é um hexaedro regular composto de 6 faces quadradas, 12 arestas e 8 vértices.</p>
        <img src="../components/images/f11.png" alt="">
        <p>Sendo a a medida da aresta:</p>
        <p>Volume do cubo</p>
        <img src="../components/images/f12.png" alt="">
        <p>Área do cubo</p>
        <img src="../components/images/f13.png" alt="">
      </aside>
      <h1>Paralelepípedo</h1>
      <aside>
        <p>O paralelepípedo é formado por 6 faces retangulares, 12 arestas e 8 vértices. Diferente do cubo, as medidas das arestas do comprimento, da largura e da altura, não possuem necessariamente a mesma medida.</p>
        <img src="../components/images/f14.png" alt="">
        <p>Volume do paralelepípedo</p>
        <img src="../components/images/f15.png" alt="">
        <p>Área total do paralelepípedo</p>
        <img src="../components/images/f16.png" alt="">
      </aside>
      <h1>Prisma</h1>
      <aside>
        <p>O Prisma é um poliedro composto por duas faces paralelas que formam as bases, que por sua vez, podem ser triangulares, quadrangulares, pentagonais, hexagonais ou, qualquer outro polígono.</p>
        <img src="../components/images/f17.png" alt="">
        <p>Volume do prisma</p>
        <img src="../components/images/f18.png" alt="">
        <p>Área do prisma</p>
        <img src="../components/images/f19.png" alt="">
      </aside>
      <h1>Pirâmide</h1>
      <aside>
        <p>A pirâmide é um poliedro composto por uma base (triangular, pentagonal, quadrada, retangular, paralelogramo) e um vértice (vértice da pirâmide) que une todas as faces laterais triangulares. Sua altura corresponde a distância entre o vértice e sua base. Quanto à sua inclinação podem ser classificadas em retas (ângulo de 90°) ou oblíquas (ângulos diferentes de 90°).</p>
        <img src="../components/images/f20.png" alt="">
        <p>Volume da pirâmide</p>
        <img src="../components/images/f21.png" alt="">
        <p>Área da pirâmide</p>
        <img src="../components/images/f22.png" alt="">
      </aside>
      <h1>Cilindro</h1>
      <aside>
        <p>O cilindro é uma forma espacial arredondada, por isso, não é considerado um poliedro. É formado por duas bases circulares e paralelas. A distância entre suas bases é sua altura.</p>
        <img src="../components/images/f23.png" alt="">
        <p>Volume do cilindro</p>
        <img src="../components/images/f24.png" alt="">
        <p>Área do cilindro</p>
        <img src="../components/images/f25.png" alt="">
      </aside>
      <h1>Esfera</h1>
      <aside>
        <p>A esfera é um sólido geométrico de forma arredondada, não sendo um poliedro.</p>
        <img src="../components/images/f29.png" alt="">
        <p>Volume do cilindro</p>
        <img src="../components/images/f30.png" alt="">
        <p>Área do cilindro</p>
        <img src="../components/images/F31.png" alt="">
      </aside>
      <h1>Cone</h1>
      <aside>
        <p>O cone é um sólido de revolução formado por uma base circular e um ponto fora desta base. O ponto que não pertence ao plano da base é o vértice do cone.</p>
        <img src="../components/images/f26.png" alt="">
        <p>Volume do cilindro</p>
        <img src="../components/images/f27.png" alt="">
        <p>Área do cilindro</p>
        <img src="../components/images/f28.png" alt="">
      </aside>
        
    <?php include '../../php/include/rodape.php'; ?>

  </body>
</html>