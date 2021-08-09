//ARGUMENTOS DE FUNÇÕES

//FUNÇÕES COMO ARGUMENTO**********************************************/

//A variável assume a função enviada, e se torna ela própria
function executaFuncao(funcao){

    console.log(funcao());

}

executaFuncao(function() { return "Retorno da função enviada como parâmetro" });

//ARGUMENTOS PARA UMA FUNÇÃO SEM PARÂMETROS**********************************************/

//O Javascript permite o envio de argumentos para funções sem parâmetros definidos
//Para que sejam recuperados e acessados, usa-se o objeto arguments
function acessaArgumentos(){

    console.log(arguments);
    console.log(arguments['3']['valor']); //Objeto-atributo
    console.log(arguments['2']);

}

acessaArgumentos(10,true, "ABCD", obj = { valor: "Sou um Objeto"}, function(){ return "Sou uma função"}, 15, 78);

//PARÂMETRO PADRÃO***************************************************************************/
function paramDefault(valor = 2){

    console.log(valor * 2);

}

paramDefault();
