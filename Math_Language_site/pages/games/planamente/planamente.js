// Arrays de perguntas por nível

//FÁCEIS
const perguntasF = [
    {
        solido: "Cubo",
        formula: { 
            volume: "V = a³",
            area: "A = 6a²" 
        },
        dados: "Um cubo mágico tem aresta (a) = 2 cm. Qual o volume dele?",
        imagem: "URL/IMAGEM_CUBO",
        resposta: 8,
    },
    {
        solido: "Paralelepípedo",
        formula: { 
            volume: "V = a × b × c",
            area: "A = 2(ab + ac + bc)" 
        },
        dados: "Uma caixa tem comprimento = 4 cm, largura = 3 cm e altura = 2 cm. Qual o volume da caixa?",
        imagem: "URL/IMAGEM_PARALELEPIPEDO",
        resposta: 24,
    },
    {
        solido: "Esfera",
        formula: { 
            volume: "V = (4/3)πr³",
            area: "A = 4πr²" 
        },
        dados: "Uma bola de futebol tem raio (r) = 3 cm. Qual a área da superfície da bola? (Use π = 3,14)",
        imagem: "URL/IMAGEM_ESFERA",
        resposta: (4 * 3.14 * Math.pow(3, 2)).toFixed(2),
    },
    {
        solido: "Pirâmide Quadrangular",
        formula: { 
            volume: "V = (1/3) × base × altura",
            area: "A = base + área lateral" 
        },
        dados: "Uma pirâmide tem base = 9 cm² e altura = 6 cm. Qual o volume dela?",
        imagem: "URL/IMAGEM_PIRAMIDE",
        resposta: 18,
    },
    {
        solido: "Cone",
        formula: { 
            volume: "V = (1/3)πr²h",
            area: "A = πr(r + l)" 
        },
        dados: "Um cone de sorvete tem raio (r) = 2 cm e altura (h) = 6 cm. Qual o volume dele? (Use π = 3,14)",
        imagem: "URL/IMAGEM_CONE",
        resposta: ((1 / 3) * 3.14 * Math.pow(2, 2) * 6).toFixed(2),
    },
    // Crie perguntas parecidas para completar as 15 fáceis
];


//MÉDIAS
const perguntasM = [
    {
        solido: "Cilindro",
        formula: { 
            volume: "V = πr²h",
            area: "A = 2πr(h + r)" 
        },
        dados: "Qual a área lateral de um cilindro com raio (r) = 4 e altura (h) = 8?",
        imagem: "URL/IMAGEM_CILINDRO",
        resposta: (2 * Math.PI * 4 * 8).toFixed(2),
    },
    {
        solido: "Cone",
        formula: { 
            volume: "V = (1/3)πr²h",
            area: "A = πr(r + l)" 
        },
        dados: "Qual o volume de um cone com raio (r) = 3 e altura (h) = 7?",
        imagem: "URL/IMAGEM_CONE",
        resposta: ((1 / 3) * Math.PI * Math.pow(3, 2) * 7).toFixed(2),
    },
    {
        solido: "Pirâmide",
        formula: { 
            volume: "V = (1/3)Ab × h",
            area: "A = Ab + Al" 
        },
        dados: "Qual o volume de uma pirâmide com base (Ab) = 10 e altura (h) = 9?",
        imagem: "URL/IMAGEM_PIRAMIDE",
        resposta: (1 / 3 * 10 * 9).toFixed(2),
    },
    // (Adicione mais 12 perguntas similares para o nível médio...)
];


//DIFÍCEIS
const perguntasD = [
    //Pergunta 1
    {
        solido: "Cone",
        formula: { 
            volume: "V = (1/3)πr²h",
            areaLateral: "A = πrl",
            areaTotal: "A = πr(r + l)"
        },
        dados: "Um cone tem raio (r) = 4 cm e altura (h) = 9 cm. Utilize π = 3,14. Primeiro, calcule o volume do cone. Em seguida, use o valor do volume para calcular a área lateral, e finalmente calcule a área total do cone.",
        imagem: "imagens/cone.png",
        resposta: 207,  // Resultado final arredondado para um número inteiro
    },

    //Pergunta 2
    {
        solido: "Esfera",
        formula: { 
            volume: "V = (4/3)πr³",
            area: "A = 4πr²",
            circunferencia: "C = 2πr"
        },
        dados: "Uma esfera tem raio (r) = 6 cm. Utilize π = 3,14. Primeiramente, calcule o volume da esfera. Depois, use esse valor para calcular a área da esfera e, por fim, calcule a circunferência da esfera.",
        imagem: "imagens/esfera.png",
        resposta: 452,  // Resultado final arredondado para um número inteiro
    },

    //Pergunta 3
    {
        solido: "Cilindro",
        formula: { 
            volume: "V = πr²h",
            areaLateral: "A = 2πrh",
            areaTotal: "A = 2πr² + 2πrh"
        },
        dados: "Um cilindro tem raio (r) = 5 cm e altura (h) = 12 cm. Utilize π = 3,14. Primeiramente, calcule o volume do cilindro. Depois, use esse valor para calcular a área lateral e, finalmente, calcule a área total do cilindro.",
        imagem: "imagens/cilindro.png",
        resposta: 678,  // Resultado final arredondado para um número inteiro
    },

    //Pergunta 4
    {
        solido: "Paralelepípedo",
        formula: { 
            volume: "V = a × b × c",
            areaTotal: "A = 2(ab + bc + ac)",
            diagonal: "d = √(a² + b² + c²)"
        },
        dados: "Um paralelepípedo tem comprimento (a) = 8 cm, largura (b) = 6 cm e altura (c) = 4 cm. Primeiramente, calcule o volume do paralelepípedo. Em seguida, use esse valor para calcular a área total e, por fim, calcule a diagonal do paralelepípedo.",
        imagem: "imagens/paralelepipedo.png",
        resposta: 10,  // Resultado final arredondado para um número inteiro
    },

    //Pergunta 5
    {
        solido: "Cubo",
        formula: { 
            volume: "V = a³",
            area: "A = 6a²",
            perimetro: "P = 12a"
        },
        dados: "Um cubo tem aresta (a) = 3 cm. Utilize π = 3,14. Primeiramente, calcule o volume do cubo. Depois, use esse valor para calcular a área e, por fim, calcule o perímetro do cubo.",
        imagem: "imagens/cubo.png",
        resposta: 54,  // Resultado final arredondado para um número inteiro
    },

    //Pergunta 6
    {
        solido: "Tetraedro",
        formula: { 
            volume: "V = (1/6)a³√2",
            area: "A = √3a²",
            perimetro: "P = 6a"
        },
        dados: "Um tetraedro tem aresta (a) = 5 cm. Utilize π = 3,14. Primeiramente, calcule o volume do tetraedro. Depois, use esse valor para calcular a área do tetraedro e, por fim, calcule o perímetro do tetraedro.",
        imagem: "URL/IMAGEM_TETRAEDRO",
        resposta: 43,  // Resultado final arredondado para um número inteiro
    },

    //Adicionar até 15 prompts
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

    // Atualizar as fórmulas no HTML, mas escondendo as indefinidas
    formulaDiv.innerHTML = `
        <strong>${perguntaAtual.solido}</strong><br>
        ${perguntaAtual.formula.volume ? `${perguntaAtual.formula.volume}<br>` : ''}
        ${perguntaAtual.formula.area ? `${perguntaAtual.formula.area}<br>` : ''}
        ${perguntaAtual.formula.circunferencia ? `${perguntaAtual.formula.circunferencia}<br>` : ''}
        ${perguntaAtual.formula.areaLateral ? `${perguntaAtual.formula.areaLateral}<br>` : ''}
        ${perguntaAtual.formula.areaTotal ? `${perguntaAtual.formula.areaTotal}<br>` : ''}
        ${perguntaAtual.formula.diagonal ? `${perguntaAtual.formula.diagonal}<br>` : ''}
        ${perguntaAtual.formula.perimetro ? `${perguntaAtual.formula.perimetro}<br>` : ''}
    `;
    dadosDiv.innerText = perguntaAtual.dados;
    imagemSolido.src = perguntaAtual.imagem;

    // Limpar o input de resultado e esconder a tela de game over
    resultadoInput.value = "";
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
