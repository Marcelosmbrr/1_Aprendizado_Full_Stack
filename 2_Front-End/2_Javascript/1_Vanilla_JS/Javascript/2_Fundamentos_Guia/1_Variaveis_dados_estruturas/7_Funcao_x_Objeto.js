//FUNÇÃO E OBJETO****************************************************************/

//O javascript interpreta certas estruturas de uma maneira pouco convencional, ou, talvez, confusa

console.log(typeof Object); //Função para criar um objeto
console.log(typeof new Object); //Objeto propriamente dito

const Cliente = function() {}
console.log(typeof Cliente); //Função 
console.log(typeof new Cliente); //Objeto

class Produto{}
console.log(typeof Produto); //Função
console.log(typeof new Produto); //Objeto

//EXPLICAÇÃO:
/*

https://developer.mozilla.org/pt-BR/docs/Learn/JavaScript/Objects/Object_prototypes
https://stackoverflow.com/questions/54861385/is-object-a-function-in-javascript
https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Functions
https://www.dofactory.com/javascript/function-objects#:~:text=In%20JavaScript%2C%20functions%20are%20called,as%20arguments%20to%20other%20functions.


1) Todos os tipos não primitivos são objetos em JavaScript; funções são objetos de primeira classe
2) Todos os objetos herdam direta ou indiretamente de Object.prototype //O protótipo dos objetos 
3) Todas as funções nativas herdam de Function.prototype, que herda de Object.prototype
4) Uma função pode ser chamada usando o () operador porque o mecanismo JavaScript sabe que é declarada usando uma palavra-chave de função e tem código executável
4.1) Assim, podemos dizer que nem todo objeto é uma função porque eles podem não ter sido declarados usando a palavra-chave function e não ter código executável
5) Como a função é tratada como um objeto em JavaScript, podemos adicionar propriedades a ela, criar novos objetos a partir dela
6) Um objeto de tipo não funcional não pode ser chamado usando () porque não tem código executável e não é declarado usando a palavra-chave de função; 
Em vez disso, é declarado usando new Object() ou notação de objeto e contém métodos e propriedades.














*/
//Função e Objeto são funções construtoras que podem ser usadas para criar uma função e um objeto