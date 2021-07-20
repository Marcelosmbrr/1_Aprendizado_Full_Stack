//MÉTODO REDUCE
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Array/reduce

//O método reduce() executa uma função reducer (fornecida por você) para cada elemento do array, resultando num único valor de retorno
//A função reducer recebe quatro parâmetros: Acumulador, Valor Atual, Index Atual, Array original 

const nums = [12, 5, 8, 130, 444, 500, 25, 78, 15];

//EXEMPLO 1
const somaMaiores = nums.reduce(function(acumulador, valor){

    if(valor > 100)
        acumulador += Number(valor);

    return acumulador;

}, 0); //Valor inicial do acumulador //Neste caso, um array

console.log(somaMaiores);




