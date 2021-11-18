//SOBRE FUNÇÃO IIFE**************************************************************/
//https://developer.mozilla.org/pt-BR/docs/Glossary/IIFE

//IIFE (Immediately Invoked Function Expression) é uma função em JavaScript que é executada assim que definida
//É um Design Pattern também conhecido como Self-Executing Anonymous Function

//Primeiro uma função anônima é encapsulada entre parênteses //Isso previne o acesso externo às variáveis declaradas na IIFE
//Depois, é criada a expressão (), por meio da qual o interpretador JavaScript avaliará e executará a função
(function () {
    console.log("Esta é uma Função Imediata");
})();

(function () {
    var valor = 10;
    console.log(valor); // 10
})();

console.log(valor); // Is not defined