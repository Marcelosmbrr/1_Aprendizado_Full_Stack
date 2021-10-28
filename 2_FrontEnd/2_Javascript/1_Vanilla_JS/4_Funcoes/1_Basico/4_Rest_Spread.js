//OPERADOR REST**********************************************/

//O Rest é utilizado para permitir que uma função receba um número indefinido de parâmetros
//Rest significa "resto", o que faz todo sentido considerando sua finalidade
//Um operador Rest necessariaemente é antecedido por três pontos ...

function showList(nome, ...clientes){

    console.log("Nome da empresa é:" + nome);
    console.log(clientes); //Irá imprimir um array com os nomes
}


showList("Fulano e Cia", "João", "Pedro", "Carlos", "Smith");

//OPERADOR SPREAD**********************************************/

//O spread permite definir um número indefinido de parâmetros para uma função, Array ou objeto
//Diferente do Rest, o Spread que significa "espalhar" permite isto mesmo, espalhar elementos de uma estrutura em outra

numeros = [1,5,8,9,45,123];
nomes = ["FULANO", "CICLANO", "BELTRANO"];

//Iremos espalhar os elementos do Array nomes, no Array pessoas
pessoas = ["João", "Fernanda", ...nomes, "Maria"];
console.log(pessoas);