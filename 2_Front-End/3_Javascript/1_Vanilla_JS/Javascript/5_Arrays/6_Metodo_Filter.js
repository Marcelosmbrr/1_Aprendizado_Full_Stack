//MÉTODO FILTER
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Array/filter

//O método filter() cria um novo array com todos os elementos que passaram no teste implementado pela função fornecida
//A função Filter recebe três parâmetros: Valor Atual, Index Atual, Array original 

const nums = [12, 5, 8, 130, 44, 500, 25, 78, 15];

//EXEMPLO 1
function callBackFilter(valor) {
    return valor >= 10;
  }

var filtrados = nums.filter(callBackFilter);
console.log("Exemplo 1: " + filtrados);

//EXEMPLO 2 - COM FUNÇÃO ANÔNIMA
var filtrados = nums.filter(function(valor) {
    return valor >= 10;
});
console.log("Exemplo 2: "+ filtrados);

//EXEMPLO 2 - COM ARROW FUNCTION
var filtrados = nums.filter(valor => {
    return valor >= 10;
});
console.log("Exemplo 3: "+ filtrados);