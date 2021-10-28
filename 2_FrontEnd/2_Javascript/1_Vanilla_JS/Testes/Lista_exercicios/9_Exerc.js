function objetoToArray(objeto){
  
    for (let [propriedade, valor] of Object.entries(objeto)) {
        console.log(`FOR OF + Object.entries(): ${propriedade} = ${valor}`);
    }

    return array;

}

const objeto = {

    atributoA: "Valor do atributo A",
    atributoB: "Valor do atributo B"

}

const array = objetoToArray(objeto);
console.log(array);