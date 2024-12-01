// Elementos da interface
const levelSpan = document.getElementById('level');
const timerSpan = document.getElementById('timer');
const displayArea = document.getElementById('display-area');
const btn1 = document.getElementById('btn1');
const btn2 = document.getElementById('btn2');
const btn3 = document.getElementById('btn3');
const submitBtn = document.getElementById('submit-btn');
const responseInput = document.getElementById('response-input');
const gameOverScreen = document.getElementById('game-over');

// Lista de prompts (etapas)
const prompts = [
    {
        dicas: [
            "É um número primo.",
            "Está entre 0 e 5.",
            "É divisor de 10."
        ],
        resposta: "2"
    },
    {
        dicas: [
            "Sua raiz quadrada é 4.",
            "Está entre 15 e 20.",
            "É um número par."
        ],
        resposta: "16"
    },
    {
        dicas: [
            "É aproximadamente igual a 3,14.",
            "É irracional.",
            "Está relacionado à circunferência de um círculo."
        ],
        resposta: "π"
    },
    {
        dicas: [
            "A conta 5 - x - 20 resulta em -25.",
            "Está entre 0 e 10",
            "É um número positivo."
        ],
        resposta: "10"
    },
    {
        dicas: [
            "Quando elevado a 4 potência resulta em 20736",
            "x + 10 = 2 * 8 + 6",
            "Não é um número primo"
        ],
        resposta: "12"
    }
];

// Variáveis globais
let currentLevel = 1; // Nível inicial
let totalTime = 0;  // Tempo total em segundos (iniciado em 0)
let currentPrompt = 0; // Índice do prompt atual

// Atualiza o tempo no formato SS
function updateTimer() {
    const seconds = totalTime; // Mostra apenas segundos
    timerSpan.textContent = `Tempo: ${seconds}s`; // Atualiza o texto do timer
}

// Função para avançar para o próximo nível
function nextLevel() {
    if (currentLevel < 5) {
        currentLevel++;  // Avança para o próximo nível
        currentPrompt++; // Avança para o próximo prompt
        levelSpan.textContent = `Nível: ${currentLevel} / 5`; // Atualiza o nível na interface
        displayArea.textContent = "Clique nos botões para ver as dicas!";
    } else {
        gameOver();  // Finaliza o jogo
    }
}

// Função para iniciar o cronômetro
function startGame() {
    totalTime = 0; // Reseta o tempo
    updateTimer(); // Atualiza a tela com o tempo
    timerInterval = setInterval(() => {
        totalTime++; // Incrementa o tempo a cada segundo
        updateTimer();
    }, 1000); // Atualiza o tempo a cada 1000ms (1 segundo)
}

// Atualiza as dicas no display ao clicar nos botões
btn1.addEventListener('click', () => {
    displayArea.textContent = prompts[currentPrompt].dicas[0];
});
btn2.addEventListener('click', () => {
    displayArea.textContent = prompts[currentPrompt].dicas[1];
});
btn3.addEventListener('click', () => {
    displayArea.textContent = prompts[currentPrompt].dicas[2];
});

// Verifica a resposta do jogador
submitBtn.addEventListener('click', () => {
    const resposta = responseInput.value.trim();
    if (resposta === prompts[currentPrompt].resposta) {
        nextLevel(); // Avança para o próximo nível
    } else {
        alert("Resposta incorreta. Tente novamente!");
    }
    responseInput.value = ""; // Limpa o campo
});

// Captura o teclado virtual
const keyboardButtons = document.querySelectorAll('.keyboard button');

// Adiciona evento de clique aos botões do teclado
keyboardButtons.forEach(button => {
    button.addEventListener('click', () => {
        const key = button.textContent.trim();

        // Caso seja um botão de número ou operador
        if (key !== '⌫') {
            responseInput.value += key; // Adiciona o valor ao campo de entrada
        } else {
            // Caso seja o botão "delete", remove o último caractere
            responseInput.value = responseInput.value.slice(0, -1);
        }
    });
});

// Função para finalizar o jogo
function gameOver() {
    clearInterval(timerInterval); // Para o cronômetro
    gameOverScreen.classList.remove('hidden'); // Exibe a tela de fim de jogo
    document.getElementById('final-time').textContent = `${totalTime}`; // Exibe o tempo final
}

// Inicia o jogo assim que a página carrega
startGame(); // Inicia o cronômetro quando o jogo começa