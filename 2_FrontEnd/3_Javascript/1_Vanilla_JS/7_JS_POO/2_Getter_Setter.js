//GETTER E SETTER NO JAVASCRIPT
//https://developer.mozilla.org/pt-BR/docs/orphaned/Web/JavaScript/Reference/Functions/get
//https://developer.mozilla.org/pt-BR/docs/orphaned/Web/JavaScript/Reference/Functions/set

class classe{

    constructor(valora,valorb){

        this.atributoA = valora;
        this.atributoB = valorb;

    }

    get recuperaAtributos(){ //Getter não pode receber argumentos

        let arrayDados = [this.atributoA, this.atributoB];
        return arrayDados;

    }

    set alteraValores(escolha_valor){ //Setter só pode receber um argumento

        let arrEV = escolha_valor.split("|"); //PHP explode()
        let escolha = arrEV[0];
        let valor = arrEV[1];

        if(escolha == "atributoA"){

            this.atributoA = valor;

        }else if(escolha == "atributoB"){

            this.atributoB = valor;

        }

    }

    imprimeValores(){

        console.log(`O valor do atributoA é ${this.atributoA}, e do atributoB é ${this.atributoB}`);

    }
  
}

const objeto = new classe("Fulano", "Beltrano");
objeto.imprimeValores();
objeto.alteraValores = "atributoA|Batman"; //Chamada de um método formal get/set
objeto.imprimeValores();