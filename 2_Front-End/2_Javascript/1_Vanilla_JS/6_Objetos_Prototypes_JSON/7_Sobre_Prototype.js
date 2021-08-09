//SOBRE PROTOTYPE
//https://developer.mozilla.org/pt-BR/docs/Learn/JavaScript/Objects/Object_prototypes
//https://cursos.alura.com.br/forum/topico-qual-o-significado-de-prototype-em-js-44069

//SOBRE O PROBLEMA: INEFICIÊNCIA COMPUTACIONAL *****************/

//Se existem vários objetos provenientes de um mesmo molde, ambos vão ter os mesmos métodos, e os mesmos atributos, apenas com valores diferentes 
//Ou seja, se dois objetos vêm de um mesmo molde que define um método para o seu objeto, ambos terão o método, e ele existirá duas vezes na memória

//SOBRE A SOLUÇÃO: PROTOTYPE *******/

// Protótipos resolvem esse problema
// São o mecanismo pelo qual objetos JavaScript compartilham os exatos mesmos recursos uns com os outros, sem que se multipliquem
// Prototype é um objeto que tem para si todos os métodos e atributos definidos em uma função construtora/Classe
// Portanto, o que o objeto Prototype faz é permitir que objetos originados de uma mesma construtora tenham acesso aos exatos mesmos recursos paralelamente

// QUANDO SURGE O PROTOTYPE - FUNÇÃO CONSTRUTORA E CRIAÇÃO LITERAL *********/

// Assim que um objeto é criado por uma função construtora/Classe, um Prototype é criado e conectado a ela
// Desta forma, todos os objetos criados por uma função construtora/Classe recebem também uma conexão ao Prototype da sua Classe
// Objetos criados isoladamente, como obj = {} também recebem um Prototype

//TODOS OS OBJETOS GLOBAIS HERDAM DE PROTOTYPE ***********/

// Todos os objetos, inclusive, obviamente, os Globais, se conectam internamente a um Prototype 
// String(), Number(), Date(), e todos os outros Objetos Globais, têm seus recursos e métodos herdados de um Prototype

// PROTOTYPE NO CONSOLE DE COMANDO DO NAVEGADOR: __PROTO__ *********/

//No Console do navegador, da aba de desenvolvedor, digitando o nome do Objeto, pode ser vista sua estrutura
//Dentre os atributos, haverá um de nome __proto__ que é justamente o objeto Prototype
// __PROTO__ é igual a Object.prototype, sendo "Object" o Objeto no caso

// RECURSOS PODEM SER ADICIONADOS AO PROTOTYPE ***************/

// É possível adicionar recursos ao objeto Prototype
// Com isso é possível fazer com que toda a cadeia de objetos de uma mesma construtora tenha acesso aos novos recursos 
// Tanto objetos que ainda seriam criados, quanto os já existentes, teriam acesso aos recursos adicionados
//OBS: Expandir Objetos Globais é desaconselhável

// PODEM SER CRIADAS E DEFINIDAS OUTRAS REFERÊNCIAS PARA PROTOTYPE ******************/

// Por default, __PROTO__ é igual a Object.prototype, como já dito 
// Mas, é possível configurar o protótipo com o método Object.setPrototypeOf() do objeto global Object //Alterar a referência do __PROTO__
// O Prototype de um objeto pode ser o Prototype de outro, ou até mesmo um outro objeto em si mesmo

