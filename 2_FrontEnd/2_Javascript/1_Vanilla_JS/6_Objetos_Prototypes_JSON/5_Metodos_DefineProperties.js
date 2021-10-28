//CONFIGURAÇÃO E DESCRIÇÃO DE PROPRIEDADES DE OBJETOS
//Estes métodos servem para permitir um controle maior sobre as propriedades dos objetos

//OBJECT.defineProperty********************************************************************************************/
//https://developer.mozilla.org/pt-BR/docs/orphaned/Web/JavaScript/Reference/Global_Objects/Object/defineProperty
//O método Object.defineProperty() define/adiciona uma nova propriedade configurável diretamente em um objeto, e retorna o objeto
function ProdutoA(nome, preco){

    this.nome = nome,
    this.preco = preco

    //Argumentos: objeto, nome da propriedade, config{}
    Object.defineProperty(this, 'marca', {
        enumerable: true, // Se true, a propriedade aparece em um for, em Object.keys, etc
        value: "Adidas", // Valor da propriedade
        writable: false, // Propriedade não pode ser alterada 
        configurable: true // Se true, a propriedade pode ser reconfigurada
    });

}

const objA = new ProdutoA("Camiseta", 19.99);
objA.marca = "XX"; //Vai ser ignorado
console.log(objA);

//OBJECT.defineProperties***********************************************************************************************/
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Object/defineProperties
//O método Object.defineProperties() serve a mesma finalidade do anterior, mas, neste caso podem ser definidas várias propriedades
function ProdutoB(nome, preco){

    //Argumentos: objeto, propriedade: {}, config
    Object.defineProperties(this, {

        nome: {
            enumerable: true, 
            value: nome, 
            writable: false, 
            configurable: true 
        },
        preco: {
            enumerable: true, 
            value: preco, 
            writable: false, 
            configurable: true 
        },
        marca: {
            enumerable: true, 
            value: "Adidas", 
            writable: false, 
            configurable: true 
        }
    });
}

const objB = new ProdutoB("Camiseta", 19.99);
console.log(objB);

//OBJECT.GetOwnPropertyDescriptor**********************************************************************************************/
//Este método permite uma análise da configuração precisa de uma propriedade
const descObj = {propriedade: "Valor qualquer"}
const descProp = Object.getOwnPropertyDescriptor(descObj, 'propriedade');
console.log(descProp);
