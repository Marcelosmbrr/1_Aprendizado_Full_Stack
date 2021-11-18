function multiplicaValores(...valores){

    //Multiplicar os números sem utilizar o operador de multiplicação

    let acm = 0;
    let multiplicando = valores[1];
    for(let cont = 0; cont < valores[0]; cont++){

        acm = acm + multiplicando;
        
    }

    return `A multiplicação de ${valores[0]} por ${valores[1]} resultou em ${acm}`;

}

const a = 10;
const b = 5;

console.log(multiplicaValores(a,b));


