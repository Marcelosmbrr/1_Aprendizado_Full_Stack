//REPETIÇÃO FOREACH
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach

//O método forEach() executa uma dada função em cada elemento de um array, em ordem
//Síntaxe: array.forEach(function(valor_atual, indice, arr(opcional)), thisValue(opcional))

var matriz = [1,2,3,4];

//array.forEach(function(valor_atual, indice)
matriz.forEach(function(valor, chave){

    console.log(chave, valor);

});