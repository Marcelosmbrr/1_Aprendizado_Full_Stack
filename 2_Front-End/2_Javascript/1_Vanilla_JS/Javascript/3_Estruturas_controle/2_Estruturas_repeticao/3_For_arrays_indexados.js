//ESTRUTURA FOR
//Para percorrer arrays indexados

function retornaMenor(arrData){

    let menor = arrData[0];
    let media = arrData[0];
    for(cont = 0; cont < arrData.length; cont++){

        if(arrData[cont] < menor){

            console.log(`O valor atual ${arrData[cont]} é menor do que seu antecessor ${menor}`);

            objData = {

                valor: arrData[cont],
                indice: cont
            }

        }else{

            console.log(`O valor atual ${arrData[cont]} continua sendo o menor`);

        }

        media += arrData[cont];

    }

    media = media/arrData.length;
    objData.media = media;
    
    return objData;

}

arrData = [0.8,2,3,4,5,6,7,8,9,0.7];
ret = retornaMenor(arrData);

console.log(`O menor valor é o ${ret.valor} da posição ${ret.indice}. Além disso, a média dos valores é ${ret.media}.`);
