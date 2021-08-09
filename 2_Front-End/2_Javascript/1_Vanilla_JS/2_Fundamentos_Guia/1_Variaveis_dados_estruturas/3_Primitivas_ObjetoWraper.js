//DADOS PRIMITIVOS****************************************************************/

//DOCUMENTAÇÃO:
//https://developer.mozilla.org/en-US/docs/Glossary/Primitive

//IMPORTANTE: Em JavaScript, um primitivo (valor primitivo, tipo de dados primitivo) são dados que não são um objeto e não têm métodos!
//Existem 7 tipos de dados primitivos: string, número, bigint, booleano, indefinido, símbolo e nulo

let nulo = null; //NULL 
let undefined; //UNDEFINED //É uma variável inicializada, mas sem valor
let booleano = true; //Boolean //True ou false
let number = 10; //Number 
let string = "palavra"; //No JavaScript, uma string é uma sequencia de zero ou mais caracteres

//Também é importante não confundir uma primitiva em si com uma variável atribuída a um valor primitivo
//A variável pode ser reatribuída a um novo valor

//OBJETOS WRAPER****************************************************************/

//DOCUMENTAÇÃO:
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects
//https://programmingwithmosh.com/javascript/javascript-wrapper-objects/

//Bom, se primitivas não são objetos, COMO ISTO PODE SER FEITO?
let nome = "Fulano";
console.log(nome.length); //De onde surgiu .lenght?
//Na documentação diz que lenght é uma propriedade do objeto String //https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/String/length

//Todos os valores primitivos têm equivalentes de objeto que envolvem o valor primitivo //Todo primitivo tem um construtor ou objeto pai
//O que ocorre é que o JS sabe quando se está tentando acessar um método do objeto pai em um primitivo
//O que ele faz é converter temporariamente a variável em um objeto, e depois de realizar a tarefa é descartado

let palavra = "Carro"; //A variável palavra recebe a primitiva string
console.log(typeof palavra); //String
let tamanho = palavra.length; //Para executar essa tarefa, se torna rapidamente um objeto String
console.log(typeof palavra); //Será string

//USO DOS CONSTRUTORES DE OBJETOS WRAPER //new String(), new Number(), etc
//Se utilizam, por via de regra, apenas para conversão de tipos //Casting

let a = "123";
console.log(typeof Number(a)); //Cast para Number
let b = 123;
console.log(typeof String(b)); //Cast para String
let c = "true";
console.log(typeof Boolean(c)); //Cast para Boolean





