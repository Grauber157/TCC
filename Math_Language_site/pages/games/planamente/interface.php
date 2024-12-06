<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Planamente Espacial</title>
    <link rel="stylesheet" href="../../../styles/games/planamente.css">
    <link rel="stylesheet" href="../../../styles/cabeça.css">
    <link rel="stylesheet" href="../../../styles/fonts.css">
    <link rel="stylesheet" href="../../../styles/media.css">
    <script>
        // Passar a dificuldade do PHP para o JavaScript como variável global
        const dificuldade = '<?= $dificuldade ?>';
    </script>
</head>
<body class="<?= $dificuldade ?>">
    <h1>Planamente Espacial - Dificuldade: <?= ucfirst($dificuldade) ?></h1>
    <div class="controls">
        <button onclick="reiniciarJogo()">Reiniciar Jogo</button>
        <button onclick="voltarPagina()">Voltar</button>
        <p id="timer">Tempo: 0s</p>
    </div>

    <div class="container">
        <div class="inputs">
            <div class="input-box">
                <label for="formula">Fórmula:</label>
                <div id="formula"></div>
            </div>

            <div class="input-box">
                <label for="dados">Dados:</label>
                <div id="dados"></div>
            </div>
        </div>
        <div class="imagem">
            <img id="imagem-solido" src="" alt="Imagem do sólido">
        </div>
        <div class="input-section">
            <label for="resultado">R:</label>
            <input type="text" id="resultado" placeholder="Digite aqui...">
            <button class="submit-btn" id="submit-btn">✔</button>
        </div>
    </div>

    <div id="game-over" class="hidden">
        <h2>Parabéns! Você ganhou <span id="final-time"></span> pontos.</h2>
    </div>

    <script src="planamente.js"></script>
</body>
</html>
