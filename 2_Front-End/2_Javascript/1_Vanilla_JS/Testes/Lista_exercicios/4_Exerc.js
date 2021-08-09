function comparaNumeros(...valores){

    console.log(`Recebidos os números ${valores[0]} e ${valores[1]}\n`);

    if(valores[0] > valores[1]){

        return `O primeiro valor ${valores[0]} é maior do que o segundo valor ${valores[1]}`;

    }else if(valores[0] == valores[1]){

        return `O primeiro valor ${valores[0]} é igual ao segundo valor ${valores[1]}`;

    }else{

        return "Os valores não são iguais, e nem o primeiro é maior do que o segundo";
    }

}

function geraNumero(){

    return Math.random() * (10 - 1) + 1;
}

const a = geraNumero().toFixed(0);
const b = geraNumero().toFixed(0);

console.log(comparaNumeros(a,b));

