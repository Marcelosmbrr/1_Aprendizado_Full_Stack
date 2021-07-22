//OBJETOS LITERAIS
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Guide/Working_with_Objects

//CRIAR OBJETO LITERAL COM CHAVES****************************/
const objeto_literal = {

    atributo1: "valor",
    atributo2: ["A", "B", "C", "D"],
    metodo: function(msg){ console.log(msg != null ? msg: "Método do objeto")}
}

console.log(objeto_literal.atributo1);
console.log(objeto_literal['atributo2']);
objeto_literal.metodo();
objeto_literal.metodo("Mensagem enviada");

//CRIAR OBJETO LITERAL COM O CONSTRUCT DO OBJETO GLOBAL OBJECT****************/
const objeto = new Object();
objeto.numero = 10;
objeto.metodo = function(multiplicador){ console.log(this.numero * multiplicador) }

objeto.metodo(10);

//CRIAR OBJETOS COM FUNÇÃO-CLASSE***********************************/
//Em JS funções construtoras, de classes, são a mesma coisa que classes; definem moldes (atributos e métodos), e retornam objetos moldados
function ClasseA(){ //Poderia receber argumentos

    this.atributo = "ClasseA: Atributo acessível pelo objeto",
    this.metodo = function() { console.log("ClasseA: Método acessível pelo objeto") }

}

const objetoA = new ClasseA();
console.log(objetoA.atributo);
objetoA.metodo();

//CRIAR OBJETO COM A EXPRESSÃO CLASSE*********************************/
//A notação classe {} foi criada apenas para facilitar a compreensão de desenvolvedores de outras linguagens de programação
//Na verdade o que é feito abaixo, é o mesmo que criar uma FUNÇÃO-CLASSE
class ClasseB{

    constructor(){
        this.atributo = "ClasseB: Atributo acessível pelo objeto",
        this.metodo = function() { console.log("ClasseB: Método acessível pelo objeto") }
    }
}

const objetoB = new ClasseB();
console.log(objetoB.atributo);
objetoB.metodo();






