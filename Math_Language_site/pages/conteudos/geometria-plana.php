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
    <title>Geometria Plana</title>
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
    
    <h1>Geometria Plana</h1>
    <aside>
      <p>A geometria plana ou euclidiana é a parte da matemática que estuda as figuras que não possuem volume. A geometria plana também é chamada de euclidiana, uma vez que seu nome representa uma homenagem ao geômetra Euclides de Alexandria, considerado o “pai da geometria”. Curioso notar que o termo geometria é a união das palavras “geo” (terra) e “metria” (medida); assim, a palavra geometria significa a "medida de terra".</p>
    </aside>
    <aside>
      <p>Ponto : Conceito adimensional, uma vez que não possui dimensão. Os pontos determinam uma localização e são indicados com letras maiúsculas.</p>
      <p>Reta: A reta, representada por letra minúscula, é uma linha ilimitada unidimensional (possui o comprimento como dimensão) e pode se apresentar em três posições: horizontal, vertical e inclinada. Dependendo da posição das retas, quando elas se cruzam, ou seja, possuem um ponto em comum, são chamadas de retas concorrentes. Por outro lado, as que não possuem ponto em comum, são classificadas como retas paralelas.</p>
      <p>Segmento de Reta: Diferente da reta, o segmento de reta é limitado pois corresponde a parte entre dois pontos distintos. A semirreta é limitada somente num sentido, visto que possui início e não possui fim.</p>
      <p>Plano: Diferente da reta, o segmento de reta é limitado pois corresponde a parte entre dois pontos distintos. A semirreta é limitada somente num sentido, visto que possui início e não possui fim.</p>
      <p>Ângulos: Os ângulos são formados pela união de dois segmentos de reta, a partir de um ponto comum, chamado de vértice do ângulo. São classificados em: ângulo reto (Â = 90º), ângulo agudo (0º) e ângulo obtuso (90º)</p>
      <p>Área: A área de uma figura geométrica expressa o tamanho de uma superfície. Assim, quanto maior a superfície da figura, maior será sua área.</p>
      <p>Perímetro: O perímetro corresponde a soma de todos os lados de uma figura geométrica.</p>
    </aside>
    <h1>Triângulo</h1>
    <aside>
      <img src="../components/images/f5.png" alt="">
      <p>Polígono (figura plana fechada) de três lados, o triângulo é uma figura geométrica plana formada por três segmentos de reta.</p>
      <p>Segundo a forma dos triângulos, eles são classificados em:</p>
      <p>triângulo equilátero: possui todos os lados e ângulos internos iguais (60°); triângulo isósceles: possui dois lados e dois ângulos internos congruentes; triângulo escaleno: possui todos os lados e ângulos internos diferentes.</p>
      <p>No tocante aos ângulos que formam os triângulos, eles são classificados em:</p>
      <p>triângulo retângulo: possui um ângulo interno de 90°; triângulo obtusângulo: possui dois ângulos agudos internos, ou seja, menor que 90°, e um ângulo obtuso interno, maior que 90°; triângulo acutângulo: possui três ângulos internos menores que 90°.</p>
    </aside>
    <h1>Quadrado</h1>
    <aside>
      <img src="../components/images/f6.png" alt="">
      <p>Polígono de quatro lados iguais, o quadrado ou quadrilátero é uma figura geométrica plana que possuem os quatro ângulos congruentes: retos (90°).</p>
    </aside>
    <h1>Retângulo</h1>
    <aside>
      <img src="../components/images/f7.png" alt="">
      <p>Figura geométrica plana marcada por dois lados paralelos no sentido vertical e os outros dois paralelos, no horizontal. Assim, todos os lados do retângulo formam ângulos reto (90°).</p>
    </aside>
    <h1>Círculo</h1>
    <aside>
      <img src="../components/images/f8.png" alt="">
      <p>Figura geométrica plana caracterizada pelo conjunto de todos os pontos de um plano. O raio (r) do círculo corresponde a medida da distância entre o centro da figura até sua extremidade.</p>
    </aside>
    <h1>Trapézio</h1>
    <aside>
      <img src="../components/images/f9.png" alt="">
      <p>Chamado de quadrilátero notável, pois a soma dos seus ângulos internos corresponde a 360º, o trapézio é uma figura geométrica plana.</p>
      <p>Ele possui dois lados e bases paralelas, donde uma é maior e outra menor. São classificados em:</p>
      <p>trapézio retângulo: possui dois ângulos de 90º; trapézio isósceles ou simétrico: os lados não paralelos possuem a mesma medida; trapézio escaleno: todos os lados de medidas diferentes.</p>
    </aside>
    <h1>Losango</h1>
    <aside>
      <img src="../components/images/f10.png" alt="">
      <p>Quadrilátero equilátero, ou seja, formado por quatro lados iguais, o losango, com o quadrado e o retângulo, é considerado um paralelogramo. Ou seja, é um polígono de quatro lados os quais possuem lados e ângulos opostos congruentes e paralelos.</p>
    </aside>
        
    <?php include '../../php/include/rodape.php'; ?>

  </body>
</html>