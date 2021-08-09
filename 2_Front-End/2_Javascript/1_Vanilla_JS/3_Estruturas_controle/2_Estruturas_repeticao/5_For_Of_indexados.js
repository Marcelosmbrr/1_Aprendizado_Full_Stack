//REPETIÇÃO FOR OF
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Statements/for...of

//O loop for...of percorre apenas estruturas iterativas/indexadas, como arrays e strings
//Diferente do For In, seu foco é o valor de cada índice

let array = [10, 20, 30, 50];

for (let valor of array) {

  console.log(valor);

}