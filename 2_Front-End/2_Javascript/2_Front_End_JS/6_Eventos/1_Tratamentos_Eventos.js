/* TRATAMENTO DE EVENTOS: FORMAS E MELHORES PRÁTICAS */
//https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Building_blocks/Events#The_evolution_of_events

//===================== PARTE 1: O QUE SÃO EVENTOS? ========================================//

//Os eventos são ações ou ocorrências que acontecem no sistema que você está programando - neste caso, um sistema web
//Com Javascript, esses eventos podem ser definidos, capturados e trabalhados

//===================== PARTE 2: FORMAS DE CAPTURAR EVENTOS - EVENT HANDLERS ========================================//

//Os mecanismos para capturar eventos são chamados de "Handlers"
//Os handlers disponíveis nativamente são esses: "Inline Handler", "Propertie Handler" e "Listener Handler"
//Os dois primeiros são classificados como "DOM Level 1 Events", e o último "DOM Level 2 Events"

//===================== PARTE 3: SOBRE OS TIPOS DE HANDLERS ========================================//

//===================== PARTE 3.1: INLINE HANDLER - NÃO UTILIZAR ====================//

//Primeiramente: o uso deste tipo de Handler é considerado uma má prática de desenvolvimento, e por isso é desaconselhado
//Consiste em mixar HTML e Javascript, com handlers disponíveis para uso no próprio HTML - por isso não é utilizado //Ver "Javascript Discreto"
//O valor do Handler é uma função que será chamada
//EXEMPLO: <button onclick = 'funcaoTratamento()'>Clicar</button> 

//===================== PARTE 3.2: PROPERTIE HANDLER ====================//

//Neste caso o JS é isolado do HTML, pois o evento é um tratado como um atributo da interface "GlobalEventHandlers" //Ver em: https://developer.mozilla.org/en-US/docs/Web/API/GlobalEventHandlers
//O evento é acessado como um atributo, ou seja, com notação de ponto
//O valor do Handler é uma função que será chamada
//EXEMPLO: const btn = document.querySelector("button"); btn.onclick = funcaoTratamento;


//===================== PARTE 3.3: EVENT LISTENER E CLASSE EVENTTARGET - MÉTODO MODERNO ====================//

//https://developer.mozilla.org/pt-BR/docs/Web/API/EventTarget
//https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/addEventListener
//https://developer.mozilla.org/en-US/docs/Web/Events 

//Existe uma classe chamada EventTarget, que permite a instância de objetos que receberão eventos e serão "ouvidos"
//Os objetos dessa classe, chamados de "Target", dispõem de métodos para lidar com eventos que os envolvem
//Um desses métodos é o addEventListener(), que configura uma função que será chamada sempre que o evento especificado ocorrer
//Sua síntaxe básica é: target.addEventListener(type, listener) //Existem outros parâmetros de configuração adicionais - ver a documentação
//O parâmetro "type" se refere ao tipo de evento, e listener à função criada para tratar a ocorrência
//EXEMPLO:

function bgChange() {
  const rndCol = 'rgb(' + random(255) + ',' + random(255) + ',' + random(255) + ')';
  document.body.style.backgroundColor = rndCol;
}

const btn = document.querySelector('button');
btn.addEventListener('click', bgChange);
