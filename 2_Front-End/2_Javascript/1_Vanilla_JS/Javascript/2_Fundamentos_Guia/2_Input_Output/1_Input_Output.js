//IMPRESSÃO EM JAVASCRIPT*****************************************/

//Com Console.log //Objeto Console; digitar "Console" no console para ver
//Esta impressão pode ser verificada na aba "console", da janela de desenvolvedor do navegador
console.log("Impressão com o método console.log()");

//Com window.alert() //Objeto Window; ; digitar "Window" no console para ver
//O método alert() exibe, na página do navegador, uma caixa de alerta com uma mensagem especificada e um botão OK
window.alert("Impressão com o método window.alert()");

//Com document.write() //Objeto Document; ; digitar "Document" no console para ver
//O método write() grava expressões HTML ou código JavaScript em um documento
let numero = 50;
document.write('<h1> Uma das formas de concatenar strings, em JS, é pondo as variáveis entre símbolos de soma (+). A variável numero é igual a: ' + numero + '</h1>');
document.write(`<h1> Outra forma de concatenar strings é com template string. O time stamp de agora é ${Date.now()} </h1>`);

//Concatenação de strings
//Como pode ser visto no exemplo anterior, pode ser utilizado o símbolo +, ou template string
//No primeiro caso, se utilizam aspas duplas, e no segundo, com template string, crases
let concat = "concatenação";
console.log("Primeira forma de " + concat); // " frase "
console.log(`Segunda forma de ${concat}`); // ` frase `

//Com window.confirm()
//Surge uma janela com uma mensagem, e dois botões: cancelar e "OK"
//O primeiro retorna o valor false, e o segundo retorna true
window.confirm("Realmente seja fazer isso?");

//Com prompt()
//Surge uma janela que permite realizar uma entrada de dados
let nome = window.prompt("Qual o seu nome?");
window.alert("Entendi! Seu nome é "+nome);
