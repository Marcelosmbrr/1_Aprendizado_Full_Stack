//MÉTODO MAP
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Array/map

//O método map() invoca a função callback passada por argumento para cada elemento do Array e devolve um novo Array como resultado
//Map faz o mapeamento de um array, com um for imbutido, retornando os dados transformados para outro array do mesmo tamanho do original
//A função Map recebe três parâmetros: Valor Atual, Index Atual, Array original 

const nums = [1, 2, 3, 4, 5];

//EXEMPLO 1
novoArray = nums.map(function(valor, indice, array){ 

    return valor*2;

});

console.log(novoArray);

//EXEMPLO 2 - CHAMADAS SUCESSIVAS
//Arrow functions com retorno implicito
const soma = (elemento) => elemento + 10;
const triplo = (elemento) => elemento * 3;
const valorMonetario = (elemento) => `R$ ${elemento.toFixed(2)}`;

//Chamada sucessivo com notação ponto
novoArray = nums.map(soma).map(triplo).map(valorMonetario);

console.log(novoArray);

//EXEMPLO 3 - COM ARROW FUNCTION DE RETORNO IMPLICITO
novoArray = nums.map((elemento) => elemento*10);

console.log(novoArray);

