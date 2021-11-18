//MÉTODOS ESTÁTICOS NO JAVASCRIPT
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Classes/static

//Métodos estáticos são acessados sem objetos, usando diretamente o nome da classe

class Classe{

    constructor(valora,valorb){

        this.atributoA = valora;
        this.atributoB = valorb;

    }

    static metodoStatic(){

        console.log("Métodos estáticos não necessitam de objetos para serem acessados");

    }

    imprimeValores(){

        console.log(`O valor do atributoA é ${this.atributoA}, e do atributoB é ${this.atributoB}`);

    }

}
  
const objeto = new Classe("Fulano", "Beltrano");
Classe.metodoStatic();
