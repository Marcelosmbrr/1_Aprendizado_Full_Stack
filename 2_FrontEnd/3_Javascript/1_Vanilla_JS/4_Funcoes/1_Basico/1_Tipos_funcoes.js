//FUNÇÕES EM JAVASCRIPT
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Guide/Functions

//Todas estas formas de declaração criam funções
//Se diferenciam, no entanto, quanto ao escopo do termo "this" - o que será abordado posteriormente

//PRIMEIRA FORMA - CRIAR UMA FUNÇÃO COM FUNCTION***********************/
function funcaoBasica(){

    console.log("Função básica");

}
funcaoBasica();

//CRIAR UMA FUNÇÃO ANÔNIMA*********************************************/
//Uma função anônima é uma função sem nome
//São frequentemente argumentos passados ​​para funções

//A variável "a" assume o valor enviado: 2 
//A variável "b" assume o valor enviado: 10
//A variável "operacao" assume a função enviada, e se torna ela própria
let quartoFuncao = function(a, b, operacao){

    //Operação retorna val1 + val2
    console.log(operacao(a,b));

}

quartoFuncao(2, 10, function(val1, val2) { return val1 + val2; });

//CRIAR UMA ARROW FUNCTION*********************************************/
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Functions/Arrow_functions

//Quando só existe um parâmetro, os parenteses são opcionais!
let funcaoArrow1 = (mensagem) => { 
    console.log(mensagem); 
}

let mensagem = "Função Arrow";
funcaoArrow1(mensagem);

//FUNÇÃO COMO DADO*********************************************************/
//É possível atribuir uma função a uma variável
function dadoFuncao(dado){

    return { dado };
}
//varFun recebe a função em si, e não o retorno dela
varFunc = dadoFuncao;
console.log(varFunc); //Irá imprimir a função em si
varFunc = dadoFuncao("ABC");
console.log(varFunc); //Irá imprimir o retorno da função

//RETORNO IMPLICITO
//O retorno de uma função Arrow pode ser implicito
//Se for um objeto, deve ser escrito entre parenteses
const criarPessoa = (nome) => ({ nome });
const retorno = criarPessoa("Daniel");
console.log(retorno);

