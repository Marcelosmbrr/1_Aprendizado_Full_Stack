//MÉTODOS/FUNÇÕES NATIVAS NO JAVASCRIPT*********************************/
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects

//No Javascript as funções nativas são, na verdade, métodos dos objetos Globais
//No PHP, por exemplo, os dados são passados como parâmetros para funções nativas, e o retorno é o dado manipulado 
//No JS os dados se tornam objetos Wrapper por um instante, para acessar métodos de objetos Globais

//OBJETO STRING
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/String/Trim

//OBJETO NUMBER
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Number

//Os outros serão abordados posteriormente

nome = "fulano";
nomeUp = nome.toUpperCase(); // Retorna "nome" com letras maiúsculas

array = [1,2,3,4,5];
array.push(6); //Adiciona o elemento na última posição
console.log(array);

string = "A|B|C|D";
arrStr = string.split("|"); // explode() do JS 
console.log(arrStr);

numero = 105;
console.log(Number.isInteger(numero))