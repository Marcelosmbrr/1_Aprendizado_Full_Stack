//ASSINCRONICIDADE: USANDO PROMISSES
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Promise
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Guide/Using_promises
//https://www.devmedia.com.br/javascript-promise/41205#:~:text=JavaScript%20JavaScript%3A%20Promise-,%C3%89%20uma%20classe%20que%20permite%20a%20constru%C3%A7%C3%A3o%20de%20fun%C3%A7%C3%B5es%20de,padr%C3%A3o%20no%20retorno%20de%20dados.

//O QUE SÃO PROMISES? ***********************************************************************************/
//Uma Promise é um objeto que representa a eventual conclusão ou falha de uma operação futura 
//Uma Promise retorna sempre um método com um parâmetro, no caso de resolução ou falha da operação: ou um .then() ou um .catch()

//.THEN() E .CATCH()***************************************************************************************/
//Para acessar o resultado de uma promise resolvida se utiliza o método .then()
//Para acessar o resultado de uma promise não resolvida se utiliza o método .catch()

//ENCADEAMENTO DE PROCESSOS***********************************************************************************/
//Com o método .then(), é possível o tratamento encadeado de resoluções
//Por exemplo, digamos que uma operação foi resolvida, e a Promise retornou um .then() com o dado da resolução
//Neste primeiro .then() o dado pode ser impresso, modificado, e depois retornado..para uma nova Promise! //O retorno em um .then() implica em uma nova Promise
//Se essa nova Promise for resolvida, um novo .then() será lançado, com um novo dado para ser trabalhado e, talvez, retornado
//Se ocorrer o retorno, novamente, uma Promisse será criada, agora uma terceira Promise, e o processo poderá continuar indefinidamente

//CALLBACK RESOLVE E CALLBACK REJECT **********************************************************************************************/
//Portanto, se utiliza o .then para tratar o retorno de uma promessa resolvida //A resolução é tratada por uma callback de nome "resolve"
//Se a promessa falhar, se utiliza o .catch() para tratar o erro retornado da promessa não resolvida //A não resolução é tratada por uma callback de nome "reject"

//EXEMPLO - PROGRESSÃO ARITMÉTICA DE FATOR 2**********************************************************************************************************************************/

//EXPLICAÇÃO DO PROGRAMA: 
//Primeiro a função é chamada, recebendo um dado, neste caso, definido como sendo o número 0
//Uma Promise é criada, e nela há uma validação: se o dado for um número, ocorrerá uma resolução, se não for, uma rejeição
//Sendo um número, a resolução irá ocorrer, e um .then() será retornado com o próprio número
//No primeiro .then(), então, o dado é impresso, e retornado sendo somado com 2 //Ou seja, uma nova Promisse é criada, e seu dado é 0 + 2
//Novamente, a resolução irá ocorrer, e o mesmo procedimento será realizado //A nova Promisse, agora, recebe o dado 2 + 2
//Será impressa, então, a sequência 0-2-4 na conclusão do programa
function progressaoAritmetica(numero){

    return new Promise((resolve, reject) =>{

        //SetTimeOut de 2 segundos para simular um processamento
        setTimeout(function(){
            
            if(isNaN(numero) == false){ //Se não for um "Não-Número"

                //Este é o caso da resolução
                //Resolve retorna um .then()
                resolve(numero); 

            }else{ //Se for um "Não-Número"

                //A callback "reject" retorna a mensagem/rejeição
                //Este é o caso da rejeição
                reject("A progressão aritmética só pode ser realizada com números!");

            }

        }, 2000);
    });

}

let A1 = 0;
let func = progressaoAritmetica(A1)
    .then(A1 => { console.log("A1 = " + A1); let A2 = A1 + 2; return A2; }) 
    .then(A2 => { console.log("A2 = " + A2); let A3 = A2 + 2; return A3; })
    .then(A3 => { console.log("A3 = " + A3); })
    .catch(msgError => { console.log(msgError) })



