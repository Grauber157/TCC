// Listas de cartas para cada dificuldade
const cardValuesF = [
    { expression: '13', solution: '5+8' },
    { expression: '5+8', solution: '13' },
    { expression: '0', solution: '9*0' },
    { expression: '9*0', solution: '0' },
    { expression: '3', solution: '21/7' },
    { expression: '21/7', solution: '3' },
    { expression: '21', solution: '7*3' },
    { expression: '7*3', solution: '21' },
    { expression: '-12', solution: '6-18' },
    { expression: '6-18', solution: '-12' },
    { expression: '12', solution: '24/2' },
    { expression: '24/2', solution: '12' },
    { expression: '0.5', solution: '1/2' },
    { expression: '1/2', solution: '0.5' },
    { expression: '15', solution: '8+7' },
    { expression: '8+7', solution: '15' }
];

const cardValuesM = [
    { expression: '4', solution: '2*2' },
    { expression: '2*2', solution: '4' },
    { expression: '6', solution: '3*2' },
    { expression: '3*2', solution: '6' },
    { expression: '9', solution: '3^2' },
    { expression: '3^2', solution: '9' },
    { expression: '12', solution: '4*3' },
    { expression: '4*3', solution: '12' }
];

const cardValuesD = [
    { expression: '16', solution: '4^2' },
    { expression: '4^2', solution: '16' },
    { expression: '25', solution: '5^2' },
    { expression: '5^2', solution: '25' },
    { expression: '36', solution: '6^2' },
    { expression: '6^2', solution: '36' },
    { expression: '49', solution: '7^2' },
    { expression: '7^2', solution: '49' },
    { expression: '64', solution: '8^2' },
    { expression: '8^2', solution: '64' },
    { expression: '81', solution: '9^2' },
    { expression: '9^2', solution: '81' }
];

// Escolhe a lista com base na dificuldade selecionada no PHP
let selectedCardValues;
switch (selectedDifficulty) {
    case 'facil':
        selectedCardValues = cardValuesF;
        break;
    case 'medio':
        selectedCardValues = cardValuesM;
        break;
    case 'dificil':
        selectedCardValues = cardValuesD;
        break;
    default:
        selectedCardValues = cardValuesF; // Default para 'easy'
}

// Seleciona os elementos do DOM
const grid = document.querySelector('.grid');
const timerDisplay = document.getElementById('timer');
const gameOverScreen = document.getElementById('game-over');
const finalTimeDisplay = document.getElementById('final-time');

let firstCard = null;
let secondCard = null;
let lockBoard = false;
let matchesFound = 0;
let timer;
let timeElapsed = 0;

// Função para iniciar o timer
function startTimer() {
    timer = setInterval(() => {
        timeElapsed++;
        timerDisplay.textContent = `Tempo: ${timeElapsed}s`;
    }, 1000);
}

// Para o timer
function stopTimer() {
    clearInterval(timer);
}

// Cria as cartas no grid
function createCard(value) {
    const card = document.createElement('div');
    card.classList.add('card');
    card.innerHTML = `<span>${value.expression}</span>`;
    card.dataset.solution = value.solution;
    card.addEventListener('click', flipCard);
    grid.appendChild(card);
}

// Função para virar a carta
function flipCard() {
    if (lockBoard) return;
    if (this === firstCard) return;

    this.classList.add('flip');

    if (!firstCard) {
        firstCard = this;
        return;
    }

    secondCard = this;
    checkMatch();
}

// Verifica se as duas cartas formam um par
function checkMatch() {
    const firstValue = firstCard.dataset.solution;
    const secondValue = secondCard.innerText;

    if (firstValue === secondValue) {
        disableCards();
        matchesFound++;
        if (matchesFound === selectedCardValues.length / 2) {
            gameOver();
        }
    } else {
        unflipCards();
    }
}

// Desativa as cartas se formarem um par
function disableCards() {
    firstCard.removeEventListener('click', flipCard);
    secondCard.removeEventListener('click', flipCard);
    firstCard.classList.add('inactive');
    secondCard.classList.add('inactive');
    resetBoard();
}

// Desvira as cartas se não formarem um par
function unflipCards() {
    lockBoard = true;

    setTimeout(() => {
        firstCard.classList.remove('flip');
        secondCard.classList.remove('flip');
        resetBoard();
    }, 1000);
}

// Reseta as variáveis de controle
function resetBoard() {
    [firstCard, secondCard] = [null, null];
    lockBoard = false;
}

// Função para finalizar o jogo
function gameOver() {
    stopTimer(); // Para o timer
    gameOverScreen.classList.remove('hidden'); // Exibe a tela de fim de jogo
    finalTimeDisplay.textContent = timeElapsed * 3; // Calcula e exibe a pontuação
}

// Embaralha as cartas
function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

// Inicia o jogo
function startGame() {
    shuffle(selectedCardValues);
    selectedCardValues.forEach(createCard);
    startTimer();
}

// Inicia o jogo automaticamente
document.addEventListener('DOMContentLoaded', startGame);
