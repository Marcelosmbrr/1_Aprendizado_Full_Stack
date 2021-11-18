function retornarPrimeiroUltimo(arrData){

    let arrRet = [];
    for(let cont = 0; cont < arrData.length; cont++){

        if(cont == 0){

            arrRet[0] = arrData[cont];

        }else if(cont == (arrData.length - 1)){

            arrRet[1] = arrData[cont];

        }
    }

    return arrRet;
}

const arrData = [12, 223, 15, true, false, 85, "Teste"];
arrRet = retornarPrimeiroUltimo(arrData);

console.log(`O primeiro valor do array original era '${arrRet[0]}', e o ultimo era '${arrRet[1]}'`);