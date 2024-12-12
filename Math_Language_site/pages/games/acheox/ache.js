// Referências corrigidas aos elementos
const timerElement = document.getElementById('timer');
const levelElement = document.getElementById('level');
const btn1 = document.getElementById('btn1');
const btn2 = document.getElementById('btn2');
const btn3 = document.getElementById('btn3');
const displayArea = document.getElementById('display-area');
const responseInput = document.getElementById('response-input');
const submitBtn = document.getElementById('submit-btn');
const gameOverScreen = document.getElementById('game-over');
const keyboardButtons = document.querySelectorAll('.keyboard button');

// Lista de prompts (etapas)
const promptsF = [
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
            "5 - x - 20 = -25.",
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
    },
    {
        dicas: [
            "É um número ímpar.",
            "Está entre 10 e 20.",
            "É o número que vem depois de 15."
        ],
        resposta: "17"
    },
    {
        dicas: [
            "Sua raiz quadrada é 9.",
            "É um número positivo.",
            "Está entre 70 e 80."
        ],
        resposta: "81"
    },
    {
        dicas: [
            "É o menor número primo.",
            "É um número ímpar.",
            "Está entre 0 e 5."
        ],
        resposta: "3"
    },
    {
        dicas: [
            "Sua raiz quadrada é 25.",
            "É um número maior que 30.",
            "É um número par."
        ],
        resposta: "36"
    },
    {
        dicas: [
            "É um número negativo.",
            "É menor que -5.",
            "Quando somado a 10, resulta em 0."
        ],
        resposta: "-10"
    },
];

const promptsM = [
    {
        dicas: [
            "É um número composto.",
            "A soma de seus divisores é igual a 28.",
            "É um número entre 20 e 30."
        ],
        resposta: "24"
    },
    {
        dicas: [
            "É um número inteiro positivo.",
            "Sua raiz cúbica é 4.",
            "É o quadrado de um número ímpar."
        ],
        resposta: "64"
    },
    {
        dicas: [
            "É um número negativo.",
            "Seu valor absoluto é 7.",
            "Quando somado a 5, o resultado é -2."
        ],
        resposta: "-7"
    },
    {
        dicas: [
            "É um número irracional.",
            "Sua representação decimal é infinita e não periódica.",
            "É a razão entre a circunferência e o diâmetro de um círculo."
        ],
        resposta: "π"
    },
    {
        dicas: [
            "É um número composto.",
            "A soma de seus divisores próprios é 28.",
            "É o dobro de 14."
        ],
        resposta: "28"
    },
    {
        dicas: [
            "É um número primo.",
            "É maior que 30.",
            "É a soma de dois números ímpares consecutivos."
        ],
        resposta: "37"
    },
    {
        dicas: [
            "É um número positivo.",
            "Sua raiz quadrada é 12.",
            "É o quadrado de um número múltiplo de 3."
        ],
        resposta: "144"
    },
    {
        dicas: [
            "É um número ímpar.",
            "Quando elevado ao quadrado, resulta em 81.",
            "Está entre 5 e 10."
        ],
        resposta: "9"
    },
    {
        dicas: [
            "Sua raiz quadrada é 5.",
            "É um número positivo.",
            "Quando somado a 20, o resultado é 25."
        ],
        resposta: "5"
    },
    {
        dicas: [
            "É um número negativo.",
            "Sua raiz quadrada não é um número inteiro.",
            "É menor que -1."
        ],
        resposta: "-2.25"
    },
];

const promptsD = [
    {
        dicas: [
            "É um número primo.",
            "É um número que aparece frequentemente nas sequências de Fibonacci.",
            "É menor que 20."
        ],
        resposta: "13"
    },
    {
        dicas: [
            "É um número irracional.",
            "A soma de suas aproximações em 4 casas decimais é 2.828.",
            "É a raiz quadrada de 8."
        ],
        resposta: "√8"
    },
    {
        dicas: [
            "É um número composto.",
            "É o produto de dois números primos consecutivos.",
            "É um número que tem exatamente 4 divisores."
        ],
        resposta: "6"
    },
    {
        dicas: [
            "É um número negativo.",
            "Sua raiz cúbica é aproximadamente -2.",
            "É menor que -1."
        ],
        resposta: "-8"
    },
    {
        dicas: [
            "É um número composto.",
            "Sua fatoração inclui 2² e 3.",
            "É maior que 20 e menor que 30."
        ],
        resposta: "24"
    },
    {
        dicas: [
            "É um número que, quando elevado ao quadrado, resulta em 1.",
            "Pode ser positivo ou negativo.",
            "É a solução de uma equação quadrática do tipo x² = 1."
        ],
        resposta: "+-1"
    },
    {
        dicas: [
            "É o menor número que pode ser expresso como a soma de dois quadrados de números inteiros de duas maneiras distintas.",
            "É um número composto.",
            "Sua fatoração inclui um número primo elevado a 2."
        ],
        resposta: "50"
    },
    {
        dicas: [
            "É um número grande e composto.",
            "Sua fatoração é 2² * 3 * 7 * 11.",
            "É maior que 200."
        ],
        resposta: "462"
    },
    {
        dicas: [
            "É um número primo.",
            "É a soma dos dois primeiros números primos maiores que 5.",
            "Está entre 20 e 40."
        ],
        resposta: "29"
    },
    {
        dicas: [
            "É um número perfeito.",
            "A soma de seus divisores próprios é igual ao próprio número.",
            "É menor que 30."
        ],
        resposta: "6"
    },
];

let currentLevel = 1; // Nível inicial
let totalTime = 0;  // Tempo total em segundos (iniciado em 0)
let currentPrompt = 0; // Índice do prompt atual
let currentDifficulty;
let timerInterval; // Referência para o intervalo do timer

// Define as prompts de acordo com a dificuldade
const difficulty = document.body.getAttribute('data-difficulty');
if (difficulty === 'medio') {
    currentDifficulty = promptsM.slice(0, 5);
} else if (difficulty === 'dificil') {
    currentDifficulty = promptsD.slice(0, 5);
} else {
    currentDifficulty = promptsF.slice(0, 5);
}

// Atualiza o tempo no formato SS
function updateTimer() {
    timerElement.textContent = `Tempo: ${totalTime}s`;
}

// Inicia o cronômetro
function startGame() {
    totalTime = 0;
    updateTimer();
    timerInterval = setInterval(() => {
        totalTime++;
        updateTimer();
    }, 1000);
}

// Função para avançar o nível
function nextLevel() {
    if (currentPrompt < currentDifficulty.length - 1) {
        currentPrompt++;
        levelElement.textContent = `Nível: ${currentPrompt + 1} / ${currentDifficulty.length}`;
        displayArea.textContent = "Clique nos botões para ver as dicas!";
    } else {
        gameOver();
    }
}

// Finaliza o jogo
function gameOver() {
    switch (totalTime) {
        case 'facil':
            totalTime = totalTime - totalTime + 10;
            break;
        case 'medio':
            totalTime = totalTime - totalTime + 15;
            break;
        case 'dificil':
            totalTime = totalTime - totalTime + 20;
            break;
        default:
            totalTime = totalTime - totalTime + 10;
    }
    clearInterval(timerInterval);

    // Exibe e envia o tempo final
    gameOverScreen.classList.remove('hidden');
    document.getElementById('final-time').textContent = `${totalTime}`;
    document.getElementById('pontuacao').value = totalTime;
}

// Eventos para dicas
btn1.addEventListener('click', () => {
    displayArea.textContent = currentDifficulty[currentPrompt].dicas[0];
});
btn2.addEventListener('click', () => {
    displayArea.textContent = currentDifficulty[currentPrompt].dicas[1];
});
btn3.addEventListener('click', () => {
    displayArea.textContent = currentDifficulty[currentPrompt].dicas[2];
});

// Verifica a resposta
submitBtn.addEventListener('click', () => {
    const resposta = responseInput.value.trim();
    if (resposta === currentDifficulty[currentPrompt].resposta) {
        nextLevel();
    } else {
        alert("Resposta incorreta. Tente novamente!");
    }
    responseInput.value = "";
});

// Eventos para o teclado virtual
keyboardButtons.forEach(button => {
    button.addEventListener('click', () => {
        const key = button.textContent.trim();
        if (key !== '⌫') {
            responseInput.value += key;
        } else {
            responseInput.value = responseInput.value.slice(0, -1);
        }
    });
});

// Inicia o jogo quando a página carrega
startGame();