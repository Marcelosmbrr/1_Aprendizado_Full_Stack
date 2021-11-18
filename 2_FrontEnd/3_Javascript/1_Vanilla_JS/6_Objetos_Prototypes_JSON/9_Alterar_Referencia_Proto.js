// DEFINIR VALOR DO __PROTO__ COMO SENDO UMA CONSTRUTORA/CLASSE************/

function ClasseConstrutora(){ 

    this.atributo = "Atributo da Classe";
    this.metodo = function(){ console.log("Método da Classe") };

}

objClasse = new ClasseConstrutora();

const objB = {};
Object.setPrototypeOf(objB, objClasse); //Objeto B recebe os "recursos base" do Objeto gerado por uma Classe/Construtora
console.log(objB.atributo);
objB.metodo();

// DEFINIR VALOR DO __PROTO__ COMO SENDO O PROTOTYPE DE UMA CONSTRUTORA/CLASSE - CADEIA DE PROTOTYPES************/

//Criar um recurso para o Prototype da Classe
ClasseConstrutora.prototype.novoMetodo = function(){

    console.log("Este novo método da ClasseConstrutora existe no seu Prototype");

}

const objC = {}
Object.setPrototypeOf(objC, ClasseConstrutora.prototype); //Objeto C recebe os recursos do Prototype da Classe/Construtora
objC.novoMetodo();

