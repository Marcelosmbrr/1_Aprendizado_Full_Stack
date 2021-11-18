function retornaInverso(valor){

    if(valor === true){

        return false;

    }else if(valor === false){

        return true;

    }else if(typeof valor === "number"){

        return valor * -1;

    }else{

        return `Tipo inválido: ${typeof valor}`;

    }
        
}

const arrData = [10, 30, true, -89, false, 2, 23, "X"];
const arrRet = [];

for(let cont = 0; cont < arrData.length; cont++){

    arrRet[cont] = retornaInverso(arrData[cont]);

}

console.log(arrRet);