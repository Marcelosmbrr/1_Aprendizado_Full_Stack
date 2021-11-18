//ARRAYS E OBJETOS LITERAIS****************************************************************/

//Em Javascript, a notação dos arrays são os colchetes
var vetor = ["amarelo", "verde", "azul", "preto"];
console.log(vetor[0]);

//A notação para objetos em JS são as chaves
//Não existem arrays associativos em JS, então, para algo semelhante ao PHP, usam-se objetos literais
//Desta forma, o que seriam as chaves do array associativo, aqui, são os atributos do objeto literal
var objeto = {
    cor: array = ["A", "B", "C", "D"],
    peso: 1200.00,
    nome: "Hulk",
    humano: false,
    rua: {
        numero: 300
    }
}

var objeto2 = {}
objeto2.atributo = "ABCD"

//Em JS os atributos do objeto são acessados com um ponto .
console.log(objeto.cor[1]);
console.log(objeto.rua.numero);
console.log(objeto2);
//Também podem ser acessados desta forma: obj['atributo'], embora não seja usual
console.log(objeto['nome']);