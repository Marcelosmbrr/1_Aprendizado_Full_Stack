//OBJETO CONSOLE****************************************************************/
//https://developer.mozilla.org/pt-BR/docs/Web/API/Console

//O objeto console fornece acesso ao console de debug do navegador
//A utilização mais frequente do console é realizar o log de texto e de outros dados
console.log("Mensagem Log");
console.info("Mensagem Info");
console.warn("Mensagem Warn");
console.error("Mensagem Error");
console.time("Contador"); //Um contador de tempo de nome "Contador"
console.timeEnd("Contador"); //Interrompe o contador de nome "Contador"

//É possível estilizar a saída no console com CSS
//Use %c para fazer isso
console.log("%cMinha mensagem estilizada", "color: red; font-style: italic");