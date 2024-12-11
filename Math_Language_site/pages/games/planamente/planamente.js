// Arrays de perguntas por nível

//FÁCEIS
const perguntasF = [
    // CUBO
    {
        solido: "Cubo",
        formula: { 
            volume: "V = a³",
            area: "A = 6a²" 
        },
        dados: "Um cubo mágico tem aresta (a) = 2 cm. Qual o volume dele?",
        imagem: "imagens/cubo.png",
        resposta: 8,
    },
    {
        solido: "Cubo",
        formula: { 
            volume: "V = a³",
            area: "A = 6a²" 
        },
        dados: "Um cubo tem aresta (a) = 5 cm. Qual o volume do cubo?",
        imagem: "imagens/cubo.png",
        resposta: 125,
    },
    

    // PARALELEPIPEDO
    {
        solido: "Paralelepípedo",
        formula: { 
            volume: "V = a × b × c",
            area: "A = 2(ab + ac + bc)" 
        },
        dados: "Uma caixa tem comprimento = 4 cm, largura = 3 cm e altura = 2 cm. Qual o volume da caixa?",
        imagem: "imagens/paralelepipedo.png",
        resposta: 24,
    },
    {
        solido: "Paralelepípedo",
        formula: { 
            volume: "V = a × b × c",
            area: "A = 2(ab + ac + bc)" 
        },
        dados: "Uma caixa tem comprimento = 6 cm, largura = 4 cm e altura = 3 cm. Qual o volume da caixa?",
        imagem: "imagens/paralelepipedo.png",
        resposta: 72,
    },
    

    // ESFERA
    {
        solido: "Esfera",
        formula: { 
            volume: "V = (4/3)πr³",
            area: "A = 4πr²" 
        },
        dados: "Uma bola de futebol tem raio (r) = 3 cm. Qual a área da superfície da bola? (Use π = 3,14)",
        imagem: "imagens/esfera.png",
        resposta: 5,
    },
    {
        solido: "Esfera",
        formula: { 
            volume: "V = (4/3)πr³",
            area: "A = 4πr²" 
        },
        dados: "Uma bola tem raio (r) = 5 cm. Qual o volume da esfera? (Use π = 3,14)",
        imagem: "imagens/esfera.png",
        resposta: 523,
    },
    

    // PIRAMIDE
    {
        solido: "Pirâmide Quadrangular",
        formula: { 
            volume: "V = (1/3) × base × altura",
            area: "A = base + área lateral" 
        },
        dados: "Uma pirâmide tem base = 9 cm² e altura = 6 cm. Qual o volume dela?",
        imagem: "imagens/piramide.png",
        resposta: 18,
    },
    {
        solido: "Pirâmide Quadrangular",
        formula: { 
            volume: "V = (1/3) × base × altura",
            area: "A = base + área lateral" 
        },
        dados: "Uma pirâmide tem base = 16 cm² e altura = 10 cm. Qual o volume da pirâmide?",
        imagem: "imagens/piramide.png",
        resposta: 53,
    },
    

    // CONE
    {
        solido: "Cone",
        formula: { 
            volume: "V = (1/3)πr²h",
            area: "A = πr(r + l)" 
        },
        dados: "Um cone de sorvete tem raio (r) = 2 cm e altura (h) = 6 cm. Qual o volume dele? (Use π = 3,14)",
        imagem: "imagens/cone.png",
        resposta: 113,
    },
    {
        solido: "Cone",
        formula: { 
            volume: "V = (1/3)πr²h",
            area: "A = πr(r + l)" 
        },
        dados: "Um cone tem raio (r) = 3 cm e altura (h) = 7 cm. Qual o volume do cone? (Use π = 3,14)",
        imagem: "imagens/cone.png",
        resposta: 198,
    }
    

];


//MÉDIAS
const perguntasM = [
    // CILINDRO
    {
        solido: "Cilindro",
        formula: { 
            volume: "V = πr²h",
            area: "A = 2πr(h + r)" 
        },
        dados: "Qual a área lateral de um cilindro com raio (r) = 4 e altura (h) = 8?",
        imagem: "imagens/cilindro.png",
        resposta: 201,
    },
    {
        solido: "Cilindro",
        formula: { 
            volume: "V = πr²h",
            area: "A = 2πr(h + r)" 
        },
        dados: "Qual a área lateral de um cilindro com raio (r) = 4 cm e altura (h) = 6 cm?",
        imagem: "imagens/cilindro.png",
        resposta: 150,
    },

    // CONE
    {
        solido: "Cone",
        formula: { 
            volume: "V = (1/3)πr²h",
            area: "A = πr(r + l)" 
        },
        dados: "Qual o volume de um cone com raio (r) = 3 cm e altura (h) = 7 cm? Use a fórmula V = (1/3)πr²h.",
        imagem: "imagens/cone.png",
        resposta: 63,
    },    
    {
        solido: "Cone",
        formula: { 
            volume: "V = (1/3)πr²h",
            area: "A = πr(r + l)" 
        },
        dados: "Qual o volume de um cone com raio (r) = 3 cm e altura (h) = 6 cm? Use a fórmula V = (1/3)πr²h.",
        imagem: "imagens/cone.png",
        resposta: 51,
    },    
    
    // PIRAMIDE
    {
        solido: "Pirâmide",
        formula: { 
            volume: "V = (1/3)Ab × h",
            area: "A = Ab + Al" 
        },
        dados: "Qual o volume de uma pirâmide com base (Ab) = 10 cm² e altura (h) = 9 cm? Use a fórmula V = (1/3)Ab × h.",
        imagem: "imagens/piramide.png",
        resposta: 30,
    },    
    {
        solido: "Pirâmide",
        formula: { 
            volume: "V = (1/3)Ab × h",
            area: "A = Ab + Al" 
        },
        dados: "Qual o volume de uma pirâmide com base (Ab) = 12 cm² e altura (h) = 9 cm? Use a fórmula V = (1/3)Ab × h.",
        imagem: "imagens/piramide.png",
        resposta: 36,
    },
    
    // PRISMA TRIANGULAR
    {
        solido: "Prisma Triangular",
        formula: { 
            volume: "V = Ab × h",
            area: "A = 2Ab + Al" 
        },
        dados: "Qual o volume de um prisma triangular com área da base (Ab) = 18 cm² e altura (h) = 10 cm? Use a fórmula V = Ab × h.",
        imagem: "imagens/prisma triangular.png",
        resposta: 180,
    },
    {
        solido: "Prisma Triangular",
        formula: { 
            volume: "V = Ab × h",
            area: "A = 2Ab + Al" 
        },
        dados: "Qual o volume de um prisma triangular com área da base (Ab) = 25 cm² e altura (h) = 10 cm? Use a fórmula V = Ab × h.",
        imagem: "imagens/prisma triangular.png",
        resposta: 250,
    },
    
    // PRISMA HEXAGONAL
    {
        solido: "Prisma Hexagonal",
        formula: { 
            volume: "V = Ab × h",
            area: "A = 6 × (lado² × √3 / 4) + 6lh" 
        },
        dados: "Qual o volume de um prisma hexagonal com área da base (Ab) = 30 cm² e altura (h) = 8 cm?",
        imagem: "imagens/prisma hexagonal.png",
        resposta: 240,
    },
    {
        solido: "Prisma Hexagonal",
        formula: { 
            volume: "V = Ab × h",
            area: "A = 6 × (lado² × √3 / 4) + 6lh" 
        },
        dados: "Qual o volume de um prisma hexagonal com área da base (Ab) = 45 cm² e altura (h) = 8 cm?",
        imagem: "imagens/prisma hexagonal.png",
        resposta: 360,
    },

    // PRISMA PENTAGONAL
    {
        solido: "Prisma Pentagonal",
        formula: { 
            volume: "V = Ab × h",
            area: "A = 5 × (lado² × √3 / 4) + 5lh" 
        },
        dados: "Qual o volume de um prisma pentagonal com área da base (Ab) = 35 cm² e altura (h) = 6 cm? Use a fórmula V = Ab × h.",
        imagem: "imagens/prisma pentagonal.png",
        resposta: 210,
    },    
    {
        solido: "Prisma Pentagonal",
        formula: { 
            volume: "V = Ab × h",
            area: "A = 5 × (lado² × √3 / 4) + 5lh" 
        },
        dados: "Qual o volume de um prisma pentagonal com área da base (Ab) = 50 cm² e altura (h) = 12 cm? Use a fórmula V = Ab × h.",
        imagem: "imagens/prisma pentagonal.png",
        resposta: 600, // Resultado arredondado para inteiro
    }  
];


//DIFÍCEIS
const perguntasD = [
    // CUBO
    {
        solido: "Cubo",
        formula: {
            volume: "V = a³",
            area: "A = 6a²",
            perimetro: "P = 12a"
        },
        dados: "Um cubo tem aresta (a) = 4 cm. Primeiro, calcule o volume do cubo. Depois, calcule a área e, por fim, calcule o perímetro do cubo.",
        imagem: "imagens/cubo.png",
        resposta: 96,  // Resultado final (volume)
    },
    {
        solido: "Cubo",
        formula: {
            volume: "V = a³",
            area: "A = 6a²",
            perimetro: "P = 12a"
        },
        dados: "Um cubo tem aresta (a) = 6 cm. Primeiro, calcule o volume do cubo. Depois, calcule a área e, por fim, calcule o perímetro do cubo.",
        imagem: "imagens/cubo.png",
        resposta: 216,  // Resultado final (volume)
    },

// ESFERA
    {
        solido: "Esfera",
        formula: {
            volume: "V = (4/3)πr³",
            area: "A = 4πr²",
            circunferencia: "C = 2πr"
        },
        dados: "Uma esfera tem raio (r) = 5 cm. Primeiro, calcule o volume da esfera. Depois, calcule a área e, por fim, calcule a circunferência da esfera.",
        imagem: "imagens/esfera.png",
        resposta: 523,  // Resultado final (volume)
    },
    {
        solido: "Esfera",
        formula: {
            volume: "V = (4/3)πr³",
            area: "A = 4πr²",
            circunferencia: "C = 2πr"
        },
        dados: "Uma esfera tem raio (r) = 8 cm. Primeiro, calcule o volume da esfera. Depois, calcule a área e, por fim, calcule a circunferência da esfera.",
        imagem: "imagens/esfera.png",
        resposta: 2145,  // Resultado final (volume)
    },

// CONE
    {
        solido: "Cone",
        formula: {
            volume: "V = (1/3)πr²h",
            areaLateral: "A = πrl",
            areaTotal: "A = πr(r + l)"
        },
        dados: "Um cone tem raio (r) = 3 cm e altura (h) = 9 cm. Utilize π = 3,14. Primeiro, calcule o volume do cone. Em seguida, calcule a área lateral e, finalmente, calcule a área total do cone.",
        imagem: "imagens/cone.png",
        resposta: 254,  // Resultado final (área total)
    },
    {
        solido: "Cone",
        formula: {
            volume: "V = (1/3)πr²h",
            areaLateral: "A = πrl",
            areaTotal: "A = πr(r + l)"
        },
        dados: "Um cone tem raio (r) = 5 cm e altura (h) = 12 cm. Utilize π = 3,14. Primeiro, calcule o volume do cone. Em seguida, calcule a área lateral e, finalmente, calcule a área total do cone.",
        imagem: "imagens/cone.png",
        resposta: 471,  // Resultado final (área total)
    },

// CILINDRO
    {
        solido: "Cilindro",
        formula: {
            volume: "V = πr²h",
            areaLateral: "A = 2πrh",
            areaTotal: "A = 2πr² + 2πrh"
        },
        dados: "Um cilindro tem raio (r) = 3 cm e altura (h) = 10 cm. Utilize π = 3,14. Primeiro, calcule o volume do cilindro. Depois, calcule a área lateral e, por fim, calcule a área total do cilindro.",
        imagem: "imagens/cilindro.png",
        resposta: 282,  // Resultado final (área total)
    },
    {
        solido: "Cilindro",
        formula: {
            volume: "V = πr²h",
            areaLateral: "A = 2πrh",
            areaTotal: "A = 2πr² + 2πrh"
        },
        dados: "Um cilindro tem raio (r) = 6 cm e altura (h) = 15 cm. Utilize π = 3,14. Primeiro, calcule o volume do cilindro. Depois, calcule a área lateral e, por fim, calcule a área total do cilindro.",
        imagem: "imagens/cilindro.png",
        resposta: 1260,  // Resultado final (área total)
    },

// PARALELEPIPEDO
    {
        solido: "Paralelepípedo",
        formula: {
            volume: "V = a × b × c",
            areaTotal: "A = 2(ab + bc + ac)",
            diagonal: "d = √(a² + b² + c²)"
        },
        dados: "Um paralelepípedo tem comprimento (a) = 7 cm, largura (b) = 5 cm e altura (c) = 4 cm. Primeiro, calcule o volume do paralelepípedo. Em seguida, calcule a área total e, por fim, calcule a diagonal do paralelepípedo.",
        imagem: "imagens/paralelepipedo.png",
        resposta: 210,  // Resultado final (área total)
    },
    {
        solido: "Paralelepípedo",
        formula: {
            volume: "V = a × b × c",
            areaTotal: "A = 2(ab + bc + ac)",
            diagonal: "d = √(a² + b² + c²)"
        },
        dados: "Um paralelepípedo tem comprimento (a) = 10 cm, largura (b) = 6 cm e altura (c) = 4 cm. Primeiro, calcule o volume do paralelepípedo. Em seguida, calcule a área total e, por fim, calcule a diagonal do paralelepípedo.",
        imagem: "imagens/paralelepipedo.png",
        resposta: 292,  // Resultado final (área total)
    },

// PRISMA TRIANGULAR
    {
        solido: "Prisma Triangular",
        formula: {
            volume: "V = A_base × h",
            areaTotal: "A = 2A_base + A_lateral"
        },
        dados: "Um prisma triangular tem base triangular com altura de 4 cm e comprimento da base 6 cm, e a altura do prisma é 10 cm. Primeiro, calcule o volume e, depois, calcule a área total.",
        imagem: "imagens/prisma triangular.png",
        resposta: 120,  // Resultado final (volume)
    },
    {
        solido: "Prisma Triangular",
        formula: {
            volume: "V = A_base × h",
            areaTotal: "A = 2A_base + A_lateral"
        },
        dados: "Um prisma triangular tem base triangular com altura de 5 cm e comprimento da base 7 cm, e a altura do prisma é 8 cm. Primeiro, calcule o volume e, depois, calcule a área total.",
        imagem: "imagens/prisma triangular.png",
        resposta: 154,  // Resultado final (volume)
    },

// PRISMA PENTAGONAL
    {
        solido: "Prisma Pentagonal",
        formula: {
            volume: "V = A_base × h",
            areaTotal: "A = 5ab + 5h"
        },
        dados: "Um prisma pentagonal tem base com lados de 5 cm e altura do prisma de 12 cm. Primeiro, calcule o volume e, depois, calcule a área total.",
        imagem: "imagens/prisma pentagonal.png",
        resposta: 600,  // Resultado final (volume)
    },
    {
        solido: "Prisma Pentagonal",
        formula: {
            volume: "V = A_base × h",
            areaTotal: "A = 5ab + 5h"
        },
        dados: "Um prisma pentagonal tem base com lados de 4 cm e altura do prisma de 15 cm. Primeiro, calcule o volume e, depois, calcule a área total.",
        imagem: "imagens/prisma pentagonal.png",
        resposta: 480,  // Resultado final (volume)
    },

// PRISMA HEXAGONAL
    {
        solido: "Prisma Hexagonal",
        formula: {
            volume: "V = A_base × h",
            areaTotal: "A = 6ab + 6h"
        },
        dados: "Um prisma hexagonal tem base com lados de 6 cm e altura do prisma de 14 cm. Primeiro, calcule o volume e, depois, calcule a área total.",
        imagem: "imagens/prisma hexagonal.png",
        resposta: 1512,  // Resultado final (volume)
    },
    {
        solido: "Prisma Hexagonal",
        formula: {
            volume: "V = A_base × h",
            areaTotal: "A = 6ab + 6h"
        },
        dados: "Um prisma hexagonal tem base com lados de 8 cm e altura do prisma de 10 cm. Primeiro, calcule o volume e, depois, calcule a área total.",
        imagem: "imagens/prisma hexagonal.png",
        resposta: 1920,  // Resultado final (volume)
    },
];

// Elementos HTML
const formulaDiv = document.getElementById('formula');
const dadosDiv = document.getElementById('dados');
const resultadoInput = document.getElementById('resultado');
const imagemSolido = document.getElementById('imagem-solido');
const gameOverScreen = document.getElementById('game-over');
const finalTimeDisplay = document.getElementById('final-time');
const levelDisplay = document.getElementById('level');

let perguntaAtual;
let pontos; // Armazena os pontos do jogador
let tentativas; // Armazena o número de tentativas feitas
let perguntasRespondidas = 0; // Contador de perguntas respondidas corretamente no nível atual
let nivelAtual = 1; // Nível atual do jogador

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
}

// Função para inicializar o jogo de acordo com a dificuldade
function inicializarJogo() {
    switch (dificuldade) {
        case 'facil':
            pontos = 15;
            break;
        case 'medio':
            pontos = 20;
            break;
        case 'dificil':
            pontos = 25;
            break;
        default:
            pontos = 15;
    }
    tentativas = 0;
    perguntasRespondidas = 5;
    carregarPergunta();
}

// Função para verificar a resposta do jogador
function verificarResposta() {
    const respostaJogador = parseFloat(resultadoInput.value);
    if (respostaJogador === perguntaAtual.resposta) {
        perguntasRespondidas++;
        tentativas++;
        resultadoInput.value = '';

        if (perguntasRespondidas < 1) {
            carregarPergunta();
        } else {
            concluirNivel();
        }
    } else {
        pontos -= 5;
        tentativas++;
        if (pontos <= 0) {
            alert('Você perdeu todas as suas tentativas. Tente novamente!');
            reiniciarJogo();
        } else {
            alert('Resposta incorreta! Tente novamente.');
        }
    }
}

// Função para finalizar o nível
function concluirNivel() {
    const pontosGanhos = Math.max(0, pontos - (tentativas - 3) * 2);
    gameOverScreen.classList.remove('hidden');
    finalTimeDisplay.textContent = `${pontosGanhos}`;
    
    // Envia os valores para o PHP
    const valor = pontosGanhos;
    document.getElementById('pontuacao').value = valor;

    // Atualizar o nível e verificar se já completou todos os níveis
    if (nivelAtual < 3) {
        nivelAtual++;
        levelDisplay.innerText = `${nivelAtual} / 3`;
        perguntasRespondidas = 0;
        carregarPergunta();
    } else {
        // Finalizar o jogo após o último nível
    }
}

// Função para reiniciar o jogo
function reiniciarJogo() {
    nivelAtual = 1;
    levelDisplay.innerText = `${nivelAtual} / 3`;
    inicializarJogo();
}

// Adicionando o evento ao botão de envio de resposta
document.getElementById('submit-btn').addEventListener('click', verificarResposta);

// Inicializando o jogo quando a página carregar
document.addEventListener('DOMContentLoaded', inicializarJogo);