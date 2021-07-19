//OBJETO NUMBER E OBJETO MATH - OPERAÇÕES MATEMÁTICAS****************************************************************/

//Em JS + serve para somar e concatenar, e por isso podem ocorrer confusões
//Devemos deixar claro para o compilador que a variável é um número com Number();
a = 2, b = 3;
soma = Number(a) + Number(b);
console.log(a + b, soma); //Imprime 5, 5

//O JS favorece o tipo string
//Nessa operação, sem Number() o 5 inteiro seria convertido para string, e ocorreria, então, uma concatenação de strings
concatenar = "10" + 5; //Imprimiria 105

//Em Js existe o NaN, que significa "Is not a Number"
//A função abaixo verifica se o valor é um NaN
console.log(Number.isNaN(a));

//OBJETO NUMBER //Objeto wraper
//https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Number

//O objeto JavaScript Number é um objeto encapsulado que permite você trabalhar com valores numéricos
//Um objeto Number é criado utilizando o construtor Number()
console.log(typeof Number("123")); //Number


//OBJETO MATH
//Math é um objeto embutido que tem propriedades e métodos para constantes e funções matemáticas
//Ao contrário de outros objetos globais, Math não é um construtor //Não se utiliza "new Math" // Todas as propriedades e métodos de Math são estáticos 
console.log(Math.random());
console.log(Math.max(1,2,500,9000,4,4.5));




