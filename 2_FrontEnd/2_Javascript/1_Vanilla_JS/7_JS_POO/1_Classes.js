//CLASSES NO JAVASCRIPT
//https://developer.mozilla.org/pt-BR/docs/orphaned/Web/JavaScript/Reference/Classes

//A sintaxe para classes não introduz um novo modelo de orientação a objetos em JavaScript
//Classes em JavaScript apenas provêm uma maneira mais simples e clara de criar objetos e lidar com herança
//Na verdade uma Classe é exatamente a mesma coisa que uma função construtora; a síntaxe é a única diferença

class classeA{

    constructor(){

        this.atributoA = "Atributo da Classe",
        this.atributoB = "Atributo da Classe",
        this.atributoC = "Atributo da Classe"

    }

    primeiroMetodo(){
        console.log("Primeiro método da ClasseA");
    }

    segundoMetodo(){
        console.log("Segundo método da ClasseA");
    }
    
}

objetoA = new classeA();
objetoA.primeiroMetodo();

//COM FUNÇÃO CONSTRUTORA*************************************************/
function classeB(){

    this.atributoA = "Atributo da Classe";
    this.atributoB = "Atributo da Classe";
    this.atributoC = "Atributo da Classe";

    this.primeiroMetodo = function(){ 
        console.log("Primeiro método da ClasseB"); 
    }

    this.segundoMetodo = function(){
        console.log("Segundo método da ClasseB");
    }

}

objetoB = new classeB();
objetoB.primeiroMetodo();