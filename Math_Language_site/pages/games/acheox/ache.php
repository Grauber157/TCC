<?php
// Verifica o nível de dificuldade selecionado (por exemplo, via GET)
$difficulty = isset($_POST['dificuldade']) ? $_POST['dificuldade'] : 'facil'; // Default: 'easy'
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ache o X</title>
    <!--<link rel="stylesheet" href="../../styles/games/diff.css">-->
    <link rel="stylesheet" href="../../../styles/games/ache.css">
    <link rel="stylesheet" href="../../../styles/cabeça.css">
    <link rel="stylesheet" href="../../../styles/fonts.css">
    <link rel="stylesheet" href="../../../styles/media.css">
    <link rel="shortcut icon" type="imagex/png" href="../../../Material/images/favicon.ico">
</head>
<body>

<script>
    const difficulty = "<?php echo $difficulty; ?>";  // Passa a dificuldade para o JavaScript
</script>

    <div class="bodyy">
        <h1>Ache o X</h1>
        <div class="controls">
            <button id="func" onclick="reiniciarJogo()">Reiniciar Jogo</button>
            <button id="func" onclick="voltarPagina()">Voltar</button>
            <p id="timer">Tempo: 0s</p>
            <p id="level">Nível: 1 / 5</p>
        </div>

        <div class="container">
            <div class="info-section">
                <div class="buttons">
                    <button class="info-btn" id="btn1">1</button>
                    <button class="info-btn" id="btn2">2</button>
                    <button class="info-btn" id="btn3">3</button>
                </div>
                <div class="display-area" id="display-area">Clique nos botões para ver as dicas!</div>
            </div>

            <div class="input-section">
                <label for="response-input">X = </label>
                <input type="text" id="response-input" placeholder="Digite sua resposta...">
                <button class="submit-btn" id="submit-btn">✔</button>
            </div>
        </div>
        
        <div class="keyboard">
            <button id="k">0</button>
            <button id="k">1</button>
            <button id="k">2</button>
            <button id="k">3</button>
            <button id="k">4</button>
            <button id="k">5</button>
            <button id="k">6</button>
            <button id="k">7</button>
            <button id="k">8</button>
            <button id="k">9</button>
            <button id="k">^</button>
            <button id="k">√</button>
            <button id="k">sen</button>
            <button id="k">cos</button>
            <button id="k">tan</button>
            <button id="k">π</button>
            <button id="k" class="delete">⌫</button>
        </div>

        <div id="game-over" class="hidden">
            <h2>Parabéns! Você ganhou <span id="final-time"></span> pontos.</h2>
            <!-- formulario para enviar valores para o banco de dados -->
            <form action="gameover.php" method="post">
                <input type="hidden" name="pontuacao" id="pontuacao">
                <input type="submit" value="Terminar" class="terminar">
            </form>
        </div>
    </div>

    

    <script src="ache.js"></script>
    <script>
        function reiniciarJogo() {
        // Lógica para reiniciar o jogo
        window.location.reload();
        }
  
        function voltarPagina() {
        // Redireciona para a página inicial
        window.location.href = '../../games.php';
        }
    </script>
</body>
</html>
