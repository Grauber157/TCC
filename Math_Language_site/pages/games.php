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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/cabeça.css" rel="stylesheet">
    <link href="../styles/fonts.css" rel="stylesheet">
    <link href="../styles/media.css" rel="stylesheet">
    <link href="../styles/games.css" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="../Material/images/favicon.ico">
    <title>Math Language</title>
</head>
<body>
    <header>
        <div id="title">
            <h1 class="title-h1">Math</h1>
            <h1>Language</h1>
        </div>

        <ul>
          <a href="home.php"><li>Home</li></a>
          <a href="cont.php"><li>Conteúdo</li></a>
          <a href="turma.php"><li>Turmas</li></a>
          <a href="contact.php"><li>Contatos</li></a>
          <!-- teste de $_SESSION -->
          <a href="cad.php" id="inscreva-se-btn"><li><?php echo "<h3>".$_SESSION['login']."</h3>"; ?></li></a>
      </ul>
    </header>
    <main>
        <h1>Jogos</h1>
        <article>
            <img src="#" alt="">
        </article>

        <!--seção teste-->
        <div class="game-container">
        <div class="game-section">

          <div class="game-section-img">
            <a href="games/matememoria.php"><img src="https://th.bing.com/th/id/OIG4.oGghNTmih3EcteLnEZwA?pid=ImgGn" alt="Matememoria" class="game-image"></a>
          </div>

            <h3 class="game-title">Matemória</h3>
            <p class="game-description">Use seus conhecimentos em contas matemáticas e sua memória para acertar as cartas que são correspondentes ao mesmo resultado.</p>
          </div>

          <div class="game-section">

            <div class="game-section-img">
              <a href="games/contra-tempo.php"><img src="https://th.bing.com/th/id/OIG1.VpwdQtPXGVfhy2waV559?pid=ImgGn" alt="Contra-Tempo" class="game-image"></a>
            </div>

            <div class="game-section-img">
              <a href="games/contra-tempo.php"><img src="components/images/capa_contratempo.png" alt="Contra-Tempo" class="game-image"></a>
            </div>

            <h3 class="game-title">Contra-Tempo</h3>
            <p class="game-description">Uma conta em cima e dois possíveis resultados embaixo, seja ágil e ache o resultado para passar nas portas antes que o tempo acabe.</p>
          </div>

          <div class="game-section">

            <div class="game-section-img">
              <a href="games/corrida-matematica.php"><img src="https://th.bing.com/th/id/OIG3.WxtyeKUN3zaOqEmZHJFi?w=1024&h=1024&rs=1&pid=ImgDetMain" alt="Corrida Matematica" class="game-image"></a>
            </div>

            <h3 class="game-title">Corrida Matemática</h3>
            <p class="game-description">Vença seu adversário nessa corrida que envolve cálculos e números, resolva as contas e avance casas para chegar no final.</p>
          </div>
          </div>

          <div class="game-container">
          <div class="game-section">

            <div class="game-section-img">
              <a href="games/ache-x.php"><img src="https://th.bing.com/th/id/OIG2.CBPYZhqpUlNd7Ffi1p_o?w=1024&h=1024&rs=1&pid=ImgDetMain" alt="Ache o X" class="game-image"></a>
            </div>

            <h3 class="game-title">Ache o X</h3>
            <p class="game-description">Você tem uma missão marujo! Nesse grande mapa, ache as pistas em problemas e equações para encontar o X escondido na ilha.</p>
          </div>

          <div class="game-section">

            <div class="game-section-img">
              <a href="games/cruzadas-calculadas.php"><img src="https://th.bing.com/th/id/OIG1.cENUC9OMpoegv7p8b98l?pid=ImgGn" alt="Cruzadas Calculadas" class="game-image"></a>
            </div>

            <h3 class="game-title">Cruzadas Calculadas</h3>
            <p class="game-description">Nessa cruzadinha matemática, monte contas que façam sentido e sigam o valor do resultado proposto.</p>
          </div>

          <div class="game-section">
            <div class="game-section-img">
              <a href="games/xxxxx.php"><img src="https://th.bing.com/th/id/OIG1.5F8bXRtAE8AU_GeLnRE4?pid=ImgGn" alt="XXXXX" class="game-image"></a>
            </div>
            <h3 class="game-title">Duelo Numérico</h3>
            <p class="game-description">Dois jogadores testam suas agilidades em contas matemáticas para derrotar um ao outro nesse duelo numérico</p>
          </div>
        </div>
        <!--------------->

    </main>
    <footer>
        <div class="footer-content1">
            <div class="contact-info">
                <h3>Contato</h3>
                <p>Email: <a href="mailto:mathlanguagebri@gmail.com">mathlanguagebri@gmail.com</a></p>
                <p>Telefone: <a href="tel:+5518988136720">(18) 98813-6720</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p id="copy">&copy; 2024 Ensino à Matemática. Todos os direitos reservados.</p>
            <div class="social-icons">
                <a href="https://github.com/Grauber157/TCC.git"><img src="../Material/images/github.png" alt="Github"></a>
                <a href="#"><img src="../Material/images/twitter.png" alt="Twitter"></a>
                <a href="https://instagram.com/mathlanguage"><img src="../Material/images/instagram.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>
</body>
</html>