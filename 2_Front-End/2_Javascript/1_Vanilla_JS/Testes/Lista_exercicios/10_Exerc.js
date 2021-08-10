function retornaMaiores(arrNumeros){

    console.log(`Números recebidos: ${arrNumeros}\n`);

    let maior = Number.MAX_SAFE_INTEGER * -1;
    let segMaior = Number.MAX_SAFE_INTEGER * -1;

    for(let cont = 0; cont < arrNumeros.length; cont++){

        if(arrNumeros[cont] > maior){

            maior = arrNumeros[cont];

        }else if(arrNumeros[cont] > segMaior && arrNumeros[cont] < maior){

            segMaior = arrNumeros[cont];

        }

    }

    return `O maior número é o ${maior} e o segundo maior é ${segMaior}`;

}

const arrNumeros = [10, 1, 85, 41, 77, 26, 103, 61];
console.log(retornaMaiores(arrNumeros));