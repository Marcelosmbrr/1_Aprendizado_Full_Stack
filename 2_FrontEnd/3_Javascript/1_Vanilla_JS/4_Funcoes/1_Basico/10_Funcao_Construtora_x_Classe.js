//SOBRE FUNÇÃO CONSTRUTORA E CLASSES - SÃO A MESMA COISA!**************************************************************/

//As funções construtoras em JavaScript são como as classes do Java ou PHP, diferenciando apenas pela sintaxe
//Em questão de funcionamento, tanto funções contrutoras no JavaScript quanto Classes no Java têm a mesma utilidade: servir de molde para a criação de objetos
//Para construir objetos, funções construtoras precisam ser instanciadas pelo operador new //O this dentro delas se referencia ao objeto criado a partir delas

function Carro(marca, modelo, ano){

    this.marca = marca;
    this.modelo = modelo;
    this.ano = ano;

    this.descreverCarro = function(){

        console.log(`A marca do carro é ${this.marca}, seu modelo é ${this.modelo} e seu ano é ${this.ano}`);

    }

}

//Retorna uma instância da Classe Carro
const carro1 = new Carro('Charger', 'RT', 1970);
console.log(carro1)
carro1.descreverCarro();

//CLASSES EM JAVASCRIPT*******************************************************************/

//Classes e funções construtoras são a mesma coisa em Javascript
//O termo reservado "Class" foi introduzido para facilitar a compreensão das pessoas que vieram de linguagens como PHP e Java

class Moto {

    //Como o método __construct() do PHP
    constructor(marca, modelo, ano){

        this.marca = marca;
        this.modelo = modelo;
        this.ano = ano;

    }

    descreverMoto(){

        console.log(`A marca da moto é ${this.marca}, seu modelo é ${this.modelo} e seu ano é ${this.ano}`);

    }

}

//Retorna uma instância da Classe Moto
const moto1 = new Moto('Moto Qualquer', 'Modelo bom', 2005);
console.log(moto1)
moto1.descreverMoto();