function retornaMaiores(arrNumeros){

    console.log(`Números recebidos: ${arrNumeros}\n`);

    arrOrdenado = ordenarArray(arrNumeros);

    /*console.log(`Array ordenado: ${arrOrdenado}\n`);

    let arrayLength = arrNumeros.length;

    let arrMaiores = [arrOrdenado[arrayLength - 2], arrOrdenado[arrayLength - 1]];

    return `O maior número é o ${arrNumeros[arrayLength - 1]} e o segundo maior é ${arrNumeros[arrayLength - 2]}`;*/

}

function ordenarArray(arrNumeros){

    let atual = '';
    let anterior = '';

    for(let cont = 1; cont < arrNumeros.length; cont++){

        atual = arrNumeros[cont];
        anterior = arrNumeros[cont - 1]

        if(anterior > atual){

            arrNumeros[cont - 1] = atual;
            arrNumeros[cont] = anterior;
        }

    }

    console.log(arrNumeros)
}

const arrNumeros = [10, 1, 85, 41, 77, 26, 103, 61];
retornaMaiores(arrNumeros);