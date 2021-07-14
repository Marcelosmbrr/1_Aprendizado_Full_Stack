//O spread permite definir um número indefinido de parâmetros para uma função, Array ou objeto
//Diferente do Rest, o Spread que significa "espalhar" permite isto mesmo, espalhar elementos de uma estrutura em outra


numeros = [1,5,8,9,45,123];
nomes = ["FULANO", "CICLANO", "BELTRANO"];

//Imprimir o maior número do Array numeros
//Esse método só permite um parâmetro Number, portanto iremos espalhar os elementos do Array numeros
Math.max(console.log(...numeros));

//Iremos espalhar os elementos do Array nomes, no Array pessoas
pessoas = ["João", "Fernanda", ...nomes, "Maria"];
console.log(pessoas);

//Espalhar elementos de um objeto literal em outro
objeto = {
    cor: "azul",
    nome: "Fusca",
    dono: "Dirnei"
}
objeto2 = { 
    ...objeto
}
console.log(objeto2);

//Espalhar elementos da instância de uma classe em outra
class Pessoa {
    constructor(pnome, pidade){
        this.nome = pnome;
        this.idade = pidade;
    }
}
pessoa = new Pessoa("Carlos", 25);
clonePessoa = {...pessoa}; //clonePessoa = elementos de pesssoa espalhados
console.log(clonePessoa);

