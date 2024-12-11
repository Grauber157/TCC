// Lista de prompts e respostas 20 cada

const promptsF = [
    { question: '2x + 4 = 14', answer: 5 },
    { question: 'x - 5 = 10', answer: 15 },
    { question: '4 + x = 12', answer: 8 },
    { question: '10x - 20 = 50', answer: 7 },
    { question: '3x + 9 = 18', answer: 3 },
    { question: 'x / 2 + 3 = 8', answer: 10 },
    { question: '45 - x = 5', answer: 40 },
    { question: '8x + 16 = 48', answer: 4 },
    { question: '20 / x = 4', answer: 5 },
    { question: 'x + 2 - 10 = 6', answer: 14 },
    { question: '6x - 18 = 0', answer: 3 },
    { question: 'x / 3 - 4 = 2', answer: 18 },
    { question: '12x + 24 = 72', answer: 4 },
    { question: 'x - 10 + 5 = 0', answer: 5 },
    { question: '9x / 3 = 27', answer: 9 },
    { question: 'x + 8 = 16', answer: 8 },
    { question: '14 - x / 2 = 10', answer: 8 },
    { question: 'x / 4 + 7 = 12', answer: 20 },
    { question: '3x - 5 = 13', answer: 6 },
    { question: 'x + 15 = 30', answer: 15 }
];

const promptsM = [
    { question: '5x - 3 = 2(x + 4)', answer: 3 },  
    { question: '2(x + 6) - 4 = 3(x + 4)', answer: 2 },  
    { question: '7x + 5 = 3x + 21', answer: 4 },  
    { question: '3(x - 2) + 4 = 2(x + 3)', answer: 5 },  
    { question: '4x + 9 = 2(x + 5)', answer: 1 },  
    { question: '6(x + 1) - 5 = 3(x + 7)', answer: 6 },  
    { question: '2(x - 3) = 4x + 10', answer: -4 },  
    { question: '3(x + 4) - 2 = 5x - 3', answer: 5 },  
    { question: '4x - 7 = 2(x + 5)', answer: 9 },  
    { question: '5(x + 2) = 3x + 22', answer: 4 },  
    { question: '7(x - 1) + 5 = 3x + 18', answer: 3 },  
    { question: '6x + 4 = 2(3x + 5)', answer: 3 },  
    { question: '3(x + 2) - 4 = 2x + 5', answer: 3 },  
    { question: '2(x + 8) = 3x - 5', answer: 21 },  
    { question: '5(x - 2) = 2x + 13', answer: 5 },  
    { question: '3(x + 5) - 4 = 2x + 12', answer: 4 },  
    { question: '6x + 2 = 2(x + 4) + 10', answer: 2 },  
    { question: '4x + 8 = 3(x + 6)', answer: 4 },  
    { question: '5(x - 4) = 3(x + 2)', answer: 7 },  
    { question: '8x - 10 = 2(x + 9)', answer: 8 },  
    { question: '12x + 4 = 7(x - 5)', answer: 3 },  
    { question: '4(x + 10) = 3(x + 5)', answer: 20 },  
    { question: '3x + 2 = 2(x + 9)', answer: 16 },  
    { question: '2x - 4 = 3(x - 6)', answer: -2 },  
    { question: '5(x + 4) = 2(3x + 7)', answer: 5 },  
    { question: '6x + 5 = 2(x + 10)', answer: 5 }
];

const promptsD = [
    { question: 'x^2 - 4x - 5 = 0', answer: 5 },  
    { question: '2x^2 - 6x = 0', answer: 3 },  
    { question: 'x^2 - 7x + 10 = 0', answer: 5 },  
    { question: '3x^2 + 8x - 12 = 0', answer: -4 },  
    { question: 'x^2 - 10x + 25 = 0', answer: 5 },  
    { question: 'x^2 + 6x - 16 = 0', answer: 2 },  
    { question: '2x^2 - 5x - 3 = 0', answer: 3 },  
    { question: 'x^2 + 9x + 20 = 0', answer: -4 },  
    { question: '4x^2 + 4x - 8 = 0', answer: 1 },  
    { question: 'x^2 - 5x + 6 = 0', answer: 3 },  
    { question: 'x^2 - 2x - 8 = 0', answer: 4 },  
    { question: '3x^2 - 14x + 8 = 0', answer: 2 },  
    { question: '5x^2 - 30x + 25 = 0', answer: 5 },  
    { question: 'x^2 + 4x - 21 = 0', answer: -7 },  
    { question: 'x^2 + 10x + 21 = 0', answer: -3 },  
    { question: 'x^2 - 6x - 7 = 0', answer: 7 },  
    { question: '2x^2 + 3x - 9 = 0', answer: 3 },  
    { question: 'x^2 + 2x - 35 = 0', answer: -7 },  
    { question: 'x^2 + 3x - 18 = 0', answer: 3 },  
    { question: '3x^2 - 4x - 7 = 0', answer: 2 },  
    { question: 'x^2 - 12x + 36 = 0', answer: 6 },  
    { question: '2x^2 + 5x - 3 = 0', answer: 1 },  
    { question: 'x^2 + 8x + 16 = 0', answer: -4 },  
    { question: 'x^2 - 3x - 10 = 0', answer: 5 },  
    { question: '4x^2 - 9x + 5 = 0', answer: 1 },  
    { question: 'x^2 - 4x + 3 = 0', answer: 3 }
];

// Escolhe a lista com base na dificuldade selecionada no PHP
let selectedPrompts;
switch (selectedDifficulty) {
    case 'facil':
        selectedPrompts = promptsF;
        break;
    case 'medio':
        selectedPrompts = promptsM;
        break;
    case 'dificil':
        selectedPrompts = promptsD;
        break;
    default:
        selectedPrompts = promptsF; // Default para 'easy'
}

// Variáveis globais do jogo
let level = 1;
let score = 0;
let startTime;
let currentPrompt;

// Atualiza o nível no DOM
function updateLevel(newLevel) {
    document.getElementById('level').innerText = `Nível: ${newLevel}`;
}

// Inicia o cronômetro
function startTimer() {
    const timerElement = document.getElementById('timer');
    setInterval(() => {
        const elapsed = Math.floor((new Date().getTime() - startTime) / 1000);
        timerElement.innerText = `Tempo: ${elapsed}s`;
    }, 1000);
}

// Gera uma nova pergunta
function generateQuestion() {
    currentPrompt = prompts[level - 1];
    document.getElementById('question').innerText = currentPrompt.question;
    generateOptions(currentPrompt.answer);
}

// Gera as opções de resposta
function generateOptions(correctAnswer) {
    const optionsElement = document.getElementById('options');
    optionsElement.innerHTML = ''; // Limpa as opções anteriores

    // Cria 3 respostas, incluindo a correta
    const answers = [
        correctAnswer,
        correctAnswer + Math.floor(Math.random() * 3 + 1),
        correctAnswer - Math.floor(Math.random() * 3 + 1)
    ];

    // Embaralha as respostas
    answers.sort(() => Math.random() - 0.5);

    answers.forEach(answer => {
        const button = document.createElement('button');
        button.innerText = answer;
        button.onclick = () => checkAnswer(answer);
        optionsElement.appendChild(button);
    });
}

// Verifica a resposta do jogador
function checkAnswer(selectedAnswer) {
    const resultElement = document.getElementById('result');

    if (selectedAnswer === currentPrompt.answer) {
        resultElement.innerText = 'Correto!';
        score++;
        nextLevel();
    } else {
        resultElement.innerText = 'Errado! Tente novamente.';
    }
}

// Avança para o próximo nível
function nextLevel() {
    if (level < prompts.length) {
        level++;
        updateLevel(level);
        generateQuestion();
    } else {
        endGame();
    }
}

// Finaliza o jogo
function endGame() {
    const gameOverElement = document.getElementById('game-over');
    gameOverElement.classList.remove('hidden');
    gameOverElement.innerText = `Parabéns! Você completou o jogo com ${score} pontos.`;
}

// Reseta o jogo
function startGame() {
    level = 1;
    score = 0;
    updateLevel(level);
    startTime = new Date().getTime();
    startTimer();
    generateQuestion();
    document.getElementById('result').innerText = '';
    document.getElementById('game-over').classList.add('hidden');
}

// Inicia o jogo ao carregar a página
document.addEventListener('DOMContentLoaded', startGame);
