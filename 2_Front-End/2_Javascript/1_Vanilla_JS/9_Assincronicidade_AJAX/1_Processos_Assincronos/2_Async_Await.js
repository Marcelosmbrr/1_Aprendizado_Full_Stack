//ASSINCRONICIDADE: UTILIZANDO ASYNC/AWAIT
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Statements/async_function
//https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Asynchronous/Async_await
//https://www.alura.com.br/artigos/async-await-no-javascript-o-que-e-e-quando-usar

//O QUE É, E COMO FUNCIONA O ASYNC/AWAIT? ******************************************************************************************************************************/

//Implementadas a partir do ES2017, são uma sintaxe que simplifica a programação assíncrona
//O async/await trabalha com o código baseado em Promises
//Definindo uma função como ASYNC, podemos utilizar a palavra-chave AWAIT antes de qualquer expressão que retorne a resolução ou rejeição de uma Promise
//Dessa forma, a execução da função ASYNC será pausada pelo AWAIT até que a Promise seja processada (resolvida ou rejeitada)
//Por fim, o retorno da função ASYNC é tratado com um .then()

//EXEMPLO - PROGRESSÃO ARITMÉTICA DE FATOR 2******************************************************************************/

//EXPLICAÇÃO DO PROGRAMA: 
//Primeiro a função é chamada, enviando um número e o fator da PA
//É impressa as condições da PA, e o primeiro elemento
//Em seguida tem o primeiro AWAIT, que trava a função ASYNC enquanto não recebe o processamento da Promise existente na função execPA()
//A função execPA() recebe o número atual, e o fator, e retorna a resolução que é a soma de ambos
//Após o processamento de todos os AWAIT, o retorno é executado, e tratado fora da função com .then()
async function progressaoAritmetica(A1, Fator) {
        console.log(`Será uma progressão aritmética de fator ${Fator}`);

        console.log(`Valor atual: ${A1}`);

        let A2 = await execPA(A1, Fator); 
        console.log(`Valor atual: ${A2}`);

        let A3 = await execPA(A2, Fator); 
        console.log(`Valor atual: ${A3}`);

        let A4 = await execPA(A3, Fator); 
        console.log(`Valor atual: ${A4}`);

        return "Fim da Progressão Aritmética";
    
}

function execPA(numero, Fator){

    return new Promise((resolve, reject) =>{

        let soma = numero+Fator;
        resolve(soma);

    });
}

let A1 = 0;
let Fator = 2;

progressaoAritmetica(A1, Fator)
    .then(retorno => console.log(retorno));


