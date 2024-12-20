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
    { question: '4x - 2 = 2(x + 3)', answer: 4 },
    { question: '5x + 2 = 3(x + 6)', answer: 7 },
    { question: '3x + 4 = x + 10', answer: 3 },
    { question: '2(x + 5) = 4 + 2x', answer: 0 },
    { question: '4x + 8 = 2x + 20', answer: 6 },
    { question: '6x - 4 = 2x + 8', answer: 3 },
    { question: '5x - 3 = 2(x + 5)', answer: 3 },
    { question: '3(x + 2) = 2x + 9', answer: 3 },
    { question: '4x + 2 = x + 14', answer: 4 },
    { question: '7x - 5 = 3x + 11', answer: 4 },
    { question: '6(x - 1) = 2x + 20', answer: 5 },
    { question: '3x + 6 = x + 18', answer: 6 },
    { question: '5x - 7 = 3x + 9', answer: 8 },
    { question: '4(x + 2) = 2x + 16', answer: 4 },
    { question: '3(x - 1) + 2 = x + 8', answer: 3 },
    { question: '7x + 3 = 2x + 28', answer: 5 },
    { question: '5(x + 1) = 2x + 17', answer: 4 },
    { question: '4x - 8 = x + 10', answer: 6 },
    { question: '3x + 2 = 2(x + 5)', answer: 8 },
    { question: '6(x - 2) = 2x + 12', answer: 4 },
    { question: '7x - 4 = 3x + 20', answer: 6 },
    { question: '5x + 6 = 2(x + 12)', answer: 6 },
    { question: '4(x + 3) = 2x + 18', answer: 6 },
    { question: '3(x + 4) = 2x + 12', answer: 4 },
    { question: '7x - 2 = 3(x + 10)', answer: 4 },
    { question: '6x + 5 = 2(x + 15)', answer: 5 }
];

const promptsD = [
    { question: '8x - 5 = 3(2x + 4)', answer: -1 },  
    { question: '4(3x - 2) = 2(6x + 3)', answer: -7 },  
    { question: '5x + 4 = 2(x + 8) + 2x', answer: 4 },      
    { question: '3(4x + 5) = 2(6x - 1)', answer: 17 },  
    { question: '7x - 2 = 3(x + 6) + x', answer: 7 },      
    { question: '2x + 3(2x - 4) = 5(x - 2) + 3', answer: 5 },      
    { question: '4(x - 3) + 2(x + 2) = 2(3x - 4)', answer: -2 },  
    { question: '3(x + 5) = 2(2x + 4) - x', answer: 1 },      
    { question: '5(2x - 1) = 3(x + 7)', answer: 4 },      
    { question: '4x - 3(2x - 4) = 3x + 5', answer: 7 },      
    { question: '6(x + 2) - 3(2x - 1) = 4(x + 3)', answer: 9 },      
    { question: '8(x - 1) + 2(3x + 4) = 7(2x + 1)', answer: 6 },      
    { question: '7(x + 1) - 2(4x - 3) = 3(3x + 2)', answer: 0 },      
    { question: '5(2x + 3) - 4(x - 2) = 3x + 11', answer: 3 },      
    { question: '6(x - 4) + 2(3x + 2) = 4(x - 1)', answer: -6 },  
    { question: '4(2x + 1) - 3(x - 5) = 5(3x - 2)', answer: -7 },  
    { question: '7(x + 3) - 4(2x + 1) = 3(3x + 2)', answer: 2 },      
    { question: '2(3x - 2) - 4(x + 5) = x + 10', answer: 8 },      
    { question: '5(2x - 3) + 4(x + 1) = 3(4x - 2)', answer: -5 },  
    { question: '4x - 2(3x + 5) = x - 7', answer: -4 },  
    { question: '6(x + 1) - 3(2x - 2) = 2(x + 5)', answer: -3 },  
    { question: '5(x - 1) + 2(x + 3) = 3(2x + 4)', answer: 9 },      
    { question: '4(2x - 3) - 3(x + 2) = 5(x - 4)', answer: -8 },
    { question: '7x - 2(4x - 5) = 3(2x - 1)', answer: 1 },
    { question: '3(4x + 2) - 2(3x + 4) = x + 8', answer: 2 }
];

const gameOverScreen = document.getElementById('game-over');

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

let level = 1; // Nível inicial
let startTime = new Date().getTime(); // Marca o tempo de início
let interval; // Controle do cronômetro
let currentPrompt; // Armazena o prompt atual
let score = 0; // Pontuação inicial
let isProcessing = false; // Variável para evitar múltiplos cliques
let timer;
let timeElapsed = 0;

// Função para iniciar o jogo
function startGame() {
    level = 1;
    score = 0; // Reseta a pontuação ao reiniciar o jogo
    updateLevel(level);
    generateQuestion(); // Gera a primeira pergunta
    clearResult();
    document.getElementById('game-over').classList.add('hidden'); // Esconde a tela de "game-over"
}

// Para o timer
function stopTimer() {
    clearInterval(timer);
}

// Função para atualizar o nível na tela
function updateLevel(level) {
    document.getElementById('level').innerText = level;
}

// Função para gerar perguntas
function generateQuestion() {
    currentPrompt = selectedPrompts[level - 1];
    document.getElementById('question').innerText = currentPrompt.question;
    generateOptions(currentPrompt.answer);
}

// Gera opções de resposta
function generateOptions(correctAnswer) {
    const wrongAnswer = correctAnswer + Math.floor(Math.random() * 3) + 1;
    const options = [correctAnswer, wrongAnswer].sort(() => Math.random() - 0.5);

    const optionButtons = document.querySelectorAll('.option');
    optionButtons[0].innerText = options[0];
    optionButtons[1].innerText = options[1];
}

// Verifica se a resposta está correta
function checkAnswer(selectedAnswer) {
    if (isProcessing) return; // Evita múltiplos cliques
    isProcessing = true;

    const resultElement = document.getElementById('result');
    const isCorrect = parseInt(selectedAnswer) === currentPrompt.answer;

    if (isCorrect) {
        showSuccess(resultElement); // Exibe mensagem de sucesso
        if (level < 10) { // Avança para o próximo nível se houver mais níveis
            level++;
            updateLevel(level);
            setTimeout(() => {
                clearResult();
                generateQuestion();
                isProcessing = false;
            }, 1000);
        } else {
            endGame();
        }
    } else {
        showFailure(resultElement); // Exibe mensagem de erro
        setTimeout(() => {
            clearResult();
            startGame(); // Reinicia o jogo sem zerar o cronômetro
            isProcessing = false;
        }, 2000);
    }
}

// Inicia o cronômetro no carregamento da página
function startTimer() {
    interval = setInterval(() => {
        const timeElapsed = Math.floor((new Date().getTime() - startTime) / 1000);
        document.getElementById('timer').innerText = timeElapsed;
    }, 1000);
}

// Funções auxiliares de exibição
function showSuccess(element) {
    element.innerText = 'Correto!';
    element.classList.remove('fail');
    element.classList.add('success');
}

function showFailure(element) {
    element.innerText = 'Resposta errada, tente novamente!';
    element.classList.remove('success');
    element.classList.add('fail');
}

function clearResult() {
    const resultElement = document.getElementById('result');
    resultElement.innerText = '';
    resultElement.classList.remove('success', 'fail');
}

// Finaliza o jogo
function endGame() {
    clearInterval(timer);
    // clearInterval(timerInterval); // Interrompe o cronômetro
    const totalTime = Math.floor((new Date().getTime() - startTime) / 1000); // Calcula o tempo total em segundos

    // Calcula a pontuação baseada no tempo
    let score;
    if (totalTime <= 20) {
        score = 10; // 10 pontos para 20 segundos ou menos
    } else {
        score = Math.max(0, 10 - Math.floor((totalTime - 20) / 10)); // Perde 1 ponto a cada 10 segundos adicionais
    }

    gameOverScreen.classList.remove('hidden'); // Mostra a tela de game over
    document.getElementById('final-time').textContent = `${score}`; // Exibe o tempo total como texto
    
    // Exibe a pontuação como texto
    document.getElementById('pontuacao').textContent = `Pontuação: ${score}`; //
    // testa ne
    const valor = score;
    document.getElementById('pontuacao').value = valor;
}


// Adiciona eventos aos botões
const optionButtons = document.querySelectorAll('.option');
optionButtons.forEach((button) => {
    button.addEventListener('click', () => {
        checkAnswer(button.innerText);
    });
});

// Inicia o jogo e o cronômetro ao carregar a página
startGame();
startTimer();
