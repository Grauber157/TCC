<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Matemória</title>
    <!--<link rel="stylesheet" href="../../styles/games/diff.css">-->
    <link rel="stylesheet" href="../../../styles/games/planamente.css">
    <link rel="stylesheet" href="../../../styles/cabeça.css">
    <link rel="stylesheet" href="../../../styles/fonts.css">
    <link rel="stylesheet" href="../../../styles/media.css">
    <link rel="shortcut icon" type="imagex/png" href="../../../Material/images/favicon.ico">
</head>
<body>
    <h1>Planamente Espacial</h1>
    <div class="controls">
        <button onclick="reiniciarJogo()">Reiniciar Jogo</button>
        <button onclick="voltarPagina()">Voltar</button>
        <p id="timer">Tempo: 0s</p>
    </div>

    <div class="container">
        <div class="inputs">
            <div class="input-box">
                <label for="formula">Fórmula:</label>
                <div id="formula" readonly>Digite nessa área aqui</div>
            </div>

            <div class="input-box">
                <label for="dados">Dados:</label>
                <div id="dados" readonly>Digite nessa área aqui</div>
            </div>
        </div>
        <div class="imagem">
            <img id="imagem-solido" src="" alt="Imagem do sólido">
        </div>
        <div class="input-section">
            <label for="response-input">R:</label>
            <input type="text" id="resultado" placeholder="Digite aqui...">
            <button class="submit-btn" id="submit-btn">✔</button>
        </div>
    </div>

    <div id="game-over" class="hidden">
        <h2>Parabéns! Você ganhou <span id="final-time"></span> pontos.</h2>
    </div>

    <script>
    // Array de perguntas
    const perguntas = [
        {
            solido: "Cubo",
            formula: {
                volume: "V = a³",
                area: "A = 6a²",
            },
            dados: "Aresta (a) = 5",
            imagem: "http://localhost:8080/testes-Jogos/Testes-Jogos/cubo/imagens/cubo.png",
            resposta: 125 // Resposta correta
        },
        {
            solido: "Esfera",
            formula: {
                volume: "V = (4/3)πr³",
                area: "A = 4πr²",
            },
            dados: "Raio (r) = 3",
            imagem: "http://localhost:8080/testes-Jogos/Testes-Jogos/cubo/imagens/esfera.png",
            resposta: (4 * Math.PI * Math.pow(3, 2)).toFixed(2) // Resposta correta
        },
        {
            solido: "Cilindro",
            formula: {
                volume: "V = πr²h",
                area: "A = 2πr(r + h)",
            },
            dados: "Raio (r) = 2, Altura (h) = 5",
            imagem: "http://localhost:8080/testes-Jogos/Testes-Jogos/cubo/imagens/cilindro.png",
            resposta: (Math.PI * Math.pow(2, 2) * 5).toFixed(2) // Resposta correta
        }
    ];

    // Elementos HTML
    const formulaDiv = document.getElementById('formula');
    const dadosDiv = document.getElementById('dados');
    const resultadoInput = document.getElementById('resultado');
    const imagemSolido = document.getElementById('imagem-solido');
    const timerDisplay = document.getElementById('timer');
    const gameOverScreen = document.getElementById('game-over');
    const finalTimeDisplay = document.getElementById('final-time');

    let timer; // Referência do cronômetro
    let timeElapsed = 0; // Tempo decorrido
    let perguntaAtual; // Armazena a pergunta atual

    // Função para iniciar o timer
    function startTimer() {
        timeElapsed = 0; // Zera o tempo
        timer = setInterval(() => {
            timeElapsed++;
            timerDisplay.textContent = `Tempo: ${timeElapsed}s`;
        }, 1000);
    }

    // Função para parar o timer
    function stopTimer() {
        clearInterval(timer);
    }

    // Carregar uma pergunta
    function carregarPergunta() {
        const index = Math.floor(Math.random() * perguntas.length);
        perguntaAtual = perguntas[index]; // Salva a pergunta atual

        // Atualizar o HTML
        formulaDiv.innerHTML = `
            <strong>${perguntaAtual.solido}</strong><br>
            Volume: ${perguntaAtual.formula.volume}<br>
            Área: ${perguntaAtual.formula.area}
        `;
        dadosDiv.innerText = perguntaAtual.dados;
        imagemSolido.src = perguntaAtual.imagem;

        // Limpar input de resposta
        resultadoInput.value = "";

        // Ocultar mensagem de game over
        gameOverScreen.classList.add("hidden");

        // Reiniciar o cronômetro
        stopTimer();
        startTimer();
    }

    // Verificar a resposta
    document.getElementById('submit-btn').addEventListener('click', () => {
        const respostaUsuario = parseFloat(resultadoInput.value);
        const respostaCorreta = parseFloat(perguntaAtual.resposta);

        if (respostaUsuario === respostaCorreta) {
            stopTimer(); // Para o cronômetro
            const pontos = Math.max(30 - timeElapsed, 0); // Cálculo da pontuação

            // Exibir mensagem de sucesso com a pontuação
            finalTimeDisplay.textContent = pontos; 
            gameOverScreen.classList.remove("hidden"); // Exibe o elemento

            setTimeout(carregarPergunta, 3000); // Carrega próxima pergunta após 3 segundos
        } else {
            alert("Resposta incorreta. Tente novamente.");
        }
    });

    // Função para reiniciar o jogo
    function reiniciarJogo() {
        window.location.reload(); // Recarrega a página
    }

    // Função para voltar à página inicial
    function voltarPagina() {
        window.location.href = 'planamente.php';
    }

    // Configurar o estado inicial da div
    document.addEventListener("DOMContentLoaded", () => {
        gameOverScreen.classList.add("hidden");
    });

    // Carregar a primeira pergunta ao iniciar a página
    carregarPergunta();
    </script>
</body>
</html>