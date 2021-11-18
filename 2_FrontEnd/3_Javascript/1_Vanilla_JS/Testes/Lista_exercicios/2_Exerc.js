function calculaDias(idade){

    let dias = idade * 365;
    return `Tendo ${idade} anos, você viveu aproxidamente ${dias} dias.`;

}

const idade = 18;
console.log(calculaDias(idade));