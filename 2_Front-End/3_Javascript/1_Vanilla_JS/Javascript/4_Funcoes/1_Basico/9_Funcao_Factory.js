//SOBRE FUNÇÃO FACTORY**************************************************************/
//https://imasters.com.br/front-end/padrao-de-projeto-de-software-javascript-factory-parte-01

//Funcões fábricas são funções que retornam/fabricam e retornam objetos literais

//EXEMPLO 1
function criarObjetoPessoa(nome, sexo, cor){

    return {
        nome: nome,
        sexo: sexo,
        cor: cor
    }

}

console.log(criarObjetoPessoa("Ana", "Feminino", "Branca"));

//EXEMPLO 2
function criarObjetoCarro(nome, preco, som){

    return {
        nome,
        preco,
        som: som,
        acelerar: function(som) { console.log(this.som); }
    }

}

camaro = criarObjetoCarro("Camaro", "250.000", "vruuuum");
console.log(camaro);
camaro.acelerar();