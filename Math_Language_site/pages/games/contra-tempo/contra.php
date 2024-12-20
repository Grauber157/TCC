<?php
    session_start();
    // Verifica o nível de dificuldade selecionado (por exemplo, via POST)
    $difficulty = isset($_POST['dificuldade']) ? $_POST['dificuldade'] : 'facil'; // Default: 'easy'  
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contra Tempo</title>
    <link rel="stylesheet" href="../../../styles/games/contra.css">
    <link rel="stylesheet" href="../../../styles/cabeça.css">
    <link rel="stylesheet" href="../../../styles/fonts.css">
    <!-- <link rel="stylesheet" href="../../../styles/media.css"> -->
    <link rel="shortcut icon" type="imagex/png" href="../../../Material/images/favicon.ico">
</head>
<body>
    <h1>Contra Tempo</h1>
    <div class="controls">
        <button onclick="reiniciarJogo()">Reiniciar Jogo</button>
        <button onclick="voltarPagina()">Voltar</button>
        <span>Nível: <span id="level">1</span> / 10</span>
        <span>Tempo: <span id="timer">0</span>s</span>
    </div>

    <div class="container">
        <div id="question" class="question"></div>
        <div class="buttons">
            <button id="option1" class="option">
                <span class="number">1</span>
            </button>
            <button id="option2" class="option">
                <span class="number">2</span>
            </button>
        </div>
        <div id="result"></div>
    </div>

    <div id="game-over" class="hidden">
        <h2>Parabéns! Você ganhou <span id="final-time"></span> pontos.</h2>
        <form action="gameover.php" method="post">
            <input type="hidden" name="pontuacao" id="pontuacao">
            <input type="submit" value="Terminar" class="terminar">
        </form>
    </div>

    <script>
        const selectedDifficulty = "<?php echo $difficulty; ?>";
    </script>

    <script src="contra.js"></script>

    <script>
        function reiniciarJogo() {
            window.location.reload();
        }
  
        function voltarPagina() {
            window.location.href = '../../games.php';
        }
    </script>
</body>
</html>
