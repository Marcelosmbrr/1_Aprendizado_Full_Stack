//COMO PERCORRER OBJETOS COM ESTRUTURAS DE REPETIÇÃO

const objetoIterativo = {a: "AAA", b: "BBB", c: "CCC"}

//COM FOR IN********************************************************************************************************************/
//Percorre índices ou chaves, permitindo acesso ao nome do índice e ao seu valor
for (const atributo in objetoIterativo) {
        console.log(`FOR IN: O atual atributo é ${atributo}, e seu valor é ${objetoIterativo[atributo]}`);     
}

//COM OBJECT.KEYS() E FOREACH()***************************************************************************************************/
//Object.keys retorna as propriedades sequencialmente em um array indexado
//Foreach percorre arrays, executando uma callback em cada valor encontrado
Object.keys(objetoIterativo).forEach(function(elemento){
    console.log(`Object.keys() + Foreach(): ${elemento} = ${objetoIterativo[elemento]}`);
});

//COM FOR OF E OBJECT.ENTRIES()***************************************************************************************************/
//Object.entries() retorna cada par propriedade-valor dentro de um array [propriedade, valor]
for (let [propriedade, valor] of Object.entries(objetoIterativo)) {
    console.log(`FOR OF + Object.entries(): ${propriedade} = ${valor}`);
}
