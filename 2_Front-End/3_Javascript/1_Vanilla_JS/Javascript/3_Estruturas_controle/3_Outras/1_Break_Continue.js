//ESTRUTURAS DE CONTROLE BREAK E CONTINUE

//BREAK
//Com Break uma estrutura de controle é interrompida inteiramente
//O compilador avança para o próximo bloco de código
arr = [1,2,3,4,5];
soma = 0;

for(valor of arr){

    console.log("O valor atual é: " + valor);
    soma += valor;

    if(valor == 3){

        console.log(`o valor atual é ${valor} e por isso o For será interrompido`);
        break;
        
    }

}
//Primeiro laço, mais segundo laço, mais terceiro laço
//1+2+3 = 6
console.log(soma);

//CONTINUE
//Com Continue apenas o laço atual é ignorado, e pulado
arr = [1,2,3];
soma = 0;

for(valor of arr){

    console.log("O valor atual é: " + valor);

    if(valor == 2){

        console.log(`o valor atual é ${valor} e por isso o For será interrompido`);
        continue;
        
    }

    soma += valor;

}
//Primeiro laço, segundo laço ignorado, mais terceiro laço
//1+3 = 4
console.log(soma);