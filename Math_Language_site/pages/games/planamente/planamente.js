// Arrays de perguntas por nível
const perguntasF = [
    {
        solido: "Cubo",
        formula: { volume: "V = a³", area: "A = 6a²" },
        dados: "Aresta (a) = 5",
        imagem: "http://localhost:8080/testes-Jogos/Testes-Jogos/cubo/imagens/cubo.png",
        resposta: 125,
    },
];

const perguntasM = [
    {
        solido: "Cone",
        formula: { volume: "V = (1/3)πr²h", area: "A = πr(r + l)" },
        dados: "Raio (r) = 4, Altura (h) = 7",
        imagem: "http://localhost:8080/testes-Jogos/Testes-Jogos/cubo/imagens/cone.png",
        resposta: (1 / 3 * Math.PI * Math.pow(4, 2) * 7).toFixed(2),
    },
];

const perguntasD = [
    {
        solido: "Tetraedro",
        formula: { volume: "V = (1/6) * a³ * √2", area: "A = √3 * a²" },
        dados: "Aresta (a) = 6",
        imagem: "http://localhost:8080/testes-Jogos/Testes-Jogos/cubo/imagens/tetraedro.png",
        resposta: (1 / 6 * Math.pow(6, 3) * Math.sqrt(2)).toFixed(2),
    },
];

// Elementos HTML
const formulaDiv = document.getElementById('formula');
const dadosDiv = document.getElementById('dados');
const resultadoInput = document.getElementById('resultado');
const imagemSolido = document.getElementById('imagem-solido');
const timerDisplay = document.getElementById('timer');
const gameOverScreen = document.getElementById('game-over');
const finalTimeDisplay = document.getElementById('final-time');

let timer;
let timeElapsed = 0;
let perguntaAtual;

// Função para iniciar o timer
function startTimer() {
    timeElapsed = 0;
    timer = setInterval(() => {
        timeElapsed++;
        timerDisplay.textContent = `Tempo: ${timeElapsed}s`;
    }, 1000);
}

// Função para parar o timer
function stopTimer() {
    clearInterval(timer);
}

// Função para carregar perguntas de acordo com a dificuldade
function carregarPergunta() {
    let perguntasSelecionadas;

    switch (dificuldade) {
        case 'facil':
            perguntasSelecionadas = perguntasF;
            break;
        case 'medio':
            perguntasSelecionadas = perguntasM;
            break;
        case 'dificil':
            perguntasSelecionadas = perguntasD;
            break;
        default:
            perguntasSelecionadas = perguntasF;
    }

    const index = Math.floor(Math.random() * perguntasSelecionadas.length);
    perguntaAtual = perguntasSelecionadas[index];

    formulaDiv.innerHTML = `
        <strong>${perguntaAtual.solido}</strong><br>
        Volume: ${perguntaAtual.formula.volume}<br>
        Área: ${perguntaAtual.formula.area}
    `;
    dadosDiv.innerText = perguntaAtual.dados;
    imagemSolido.src = perguntaAtual.imagem;

    resultadoInput.value = "";
    gameOverScreen.classList.add("hidden");

    stopTimer();
    startTimer();
}

// Verificar a resposta
document.getElementById('submit-btn').addEventListener('click', () => {
    const respostaUsuario = parseFloat(resultadoInput.value);
    const respostaCorreta = parseFloat(perguntaAtual.resposta);

    if (respostaUsuario === respostaCorreta) {
        stopTimer();
        const pontos = Math.max(30 - timeElapsed, 0);
        finalTimeDisplay.textContent = pontos;
        gameOverScreen.classList.remove("hidden");
        setTimeout(carregarPergunta, 3000);
    } else {
        alert("Resposta incorreta. Tente novamente.");
    }
});

// Configurar a página inicial
document.addEventListener("DOMContentLoaded", () => {
    carregarPergunta();
});
