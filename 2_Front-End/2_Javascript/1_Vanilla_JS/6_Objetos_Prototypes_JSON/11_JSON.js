//SOBRE JSON
//https://developer.mozilla.org/pt-BR/docs/Learn/JavaScript/Objects/JSON

// O QUE É JSON? ******************************************************/
//JSON é uma sintaxe para serialização de dados
//Baseia-se na sintaxe Javascript, mas é distinta desta
//É utilizado principalmente para realizar o tráfego de dados entre diferentes sistemas, mesmo que escritos em linguagens diferentes

// JSON EM SI NÃO É UM OBJETO! *********************************************/
//Embora semelhante, um JSON não é um objeto javascript
//Na verdade, o JSON existe como uma string, e precisa ser convertido em um objeto JavaScript nativo para que seus dados sejam acessados

// OS 2 MÉTODOS PARA MANIPULAÇÃO DE JSON, NO JAVASCRIPT - OBJETO GLOBAL JSON ************************/
//O objeto JSON contém métodos para realizar a conversão de dados para JSON, e vice-versa
//Estes métodos são: JSON.parse(text[, reviver]) e JSON.stringify(value[, replacer[, space]])

//EXEMPLO

function toJSON(dado){

    return JSON.stringify(dado); //Converte para string JSON

}

function jsonToObject(json){

    return JSON.parse(json); //Converte string JSON para um dado Javascript

}

let a = 10;
let b = 20;
let c = 30;

const objeto = {a, b, c, imprimeValores(){ console.log(`O primeiro atributo vale ${this.a}, o segundo ${this.b}, e o terceiro ${this.c}`) }}

//Imprime o objeto em formato JSON
const objJSON = toJSON(objeto)
console.log(objJSON);

//Imprime o JSON em formato de objeto
console.log(jsonToObject(objJSON));
