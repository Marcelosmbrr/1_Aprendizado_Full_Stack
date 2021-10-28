function removeAtributo(objeto, atributo){

    for(chave in objeto){

        if(chave == atributo){

            delete objeto[chave];

        }
    }

    return objeto;

}

function factory(data){

    return {

        nome: data[0],
        sexo: data[1],
        idade: data[2],
        cor_preferida: data[3]
    }

}

const pessoa = factory(["Fulano", "Masculino", 19, "Azul"]);
const objetoUpdate = removeAtributo(pessoa, "cor_preferida");

console.log(objetoUpdate);





