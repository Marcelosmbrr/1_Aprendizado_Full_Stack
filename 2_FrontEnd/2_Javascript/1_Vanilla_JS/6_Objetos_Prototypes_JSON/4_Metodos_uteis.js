//MÉTODOS ÚTEIS PARA MANIPULAR OBJETOS
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Object
//SPREAD, ASSIGN, KEYS, ENTRIES E FREEZE

//SPREAD***********************************************/
//Espalhar a estrutura de um objeto em outro
const objOriginal = {
    nome: "Produto",
    preco: 20.00,
    fabricante: "I Dunno"
}

const objNovo = {
    ...objOriginal, //Spread
    dono: "Batman"
}

console.log(objNovo);

//OBJECT.assign*******************************************/
//O método Object.assign() é usado para copiar os valores de todas as propriedades próprias enumeráveis de um ou mais objetos de origem para um objeto destino
//Síntaxe: O primeiro parâmetro é o objeto de destino, e os restantes o conteúdo a ser enviado
const destino = {a: "A"};
const objAssign = Object.assign(destino, objOriginal, {b: "B"});
console.log(objAssign);

//OBJECT.keys**********************************************/
//https://developer.mozilla.org/pt-BR/docs/orphaned/Web/JavaScript/Reference/Global_Objects/Object/keys
//O método Object.keys() retorna um array de propriedades enumeraveis de um determinado objeto, na mesma ordem em que é fornecida por um laço for...in
const arrKeys = Object.keys(objOriginal);
console.log(arrKeys);

//OBJECT.entries********************************************/
//https://developer.mozilla.org/pt-BR/docs/orphaned/Web/JavaScript/Reference/Global_Objects/Object/entries
//O método Object.entries() retorna uma array dos próprios pares  [key, value] enumeráveis de um dado objeto, na mesma ordem dos objetos providos através do loop for...in
const ObjEntries = { foo: 'bar', baz: 42 };
console.log(Object.entries(ObjEntries));

//OBJECT.freeze********************************************/
//https://developer.mozilla.org/pt-BR/docs/orphaned/Web/JavaScript/Reference/Global_Objects/Object/freeze
//O método Object.freeze() congela um objeto; não permite adição, remoção ou alteração das propriedades //Tentativas serão ignoradas
const objFreeze = {a: "A", b: "B", c: "C"}
Object.freeze(objFreeze);
objFreeze.d = "D"; //Será ignorado
console.log(objFreeze) //Irá imprimir {a: "A", b: "B", c: "C"}







