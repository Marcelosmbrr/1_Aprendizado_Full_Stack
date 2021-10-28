//SOBRE FUNÇÃO CALLBACK**************************************************************/
//https://developer.mozilla.org/pt-BR/docs/Glossary/Callback_function
//https://blog.betrybe.com/tecnologia/callback/

//Uma função callback é uma função passada a outra função como argumento, que é então invocado dentro da função externa para completar algum tipo de rotina ou ação
//Basicamente, callback é um tipo de função que só é executada após o processamento de outra função
//Na linguagem JavaScript, quando uma função é passada como um argumento de outra, ela é, então, chamada de callback

//PRIMEIRO EXEMPLO**********************************************/
const nomes = ["Fulano", "Beltrano", "Ciclano"];

function imprimirNomes(valor, indice){

    console.log(`${indice + 1}. ${valor}`);

}

//Neste caso, imprimirNomes é uma função callBack
//É chamada sempre que um novo elemento é encontrado no array nomes, pelo método forEach()
nomes.forEach(imprimirNomes);

//SEGUNDO EXEMPLO***************************************************/
function exibePrimeiraMensagem (mensagem, callback) {
	console.log(mensagem); //Imprime a mensagem
	callback(); //Chama a função callback (exibeSegundaMensagem)
}
function exibeSegundaMensagem(){
	console.log('Essa é a segunda mensagem do novo exemplo');
} 
//É enviado uma mensagem, e uma função, que é a callback
exibePrimeiraMensagem ('Essa é a primeira mensagem do novo exemplo', exibeSegundaMensagem);