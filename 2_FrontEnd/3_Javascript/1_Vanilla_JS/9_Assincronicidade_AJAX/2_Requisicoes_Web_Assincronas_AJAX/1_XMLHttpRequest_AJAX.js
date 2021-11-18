//REQUISIÇÕES WEB ASSÍNCRONAS: AJAX COM A CLASSE XMLHTTPREQUEST
//https://developer.mozilla.org/pt-BR/docs/Web/API/XMLHttpRequest/Using_XMLHttpRequest

//XMLHttpRequest torna o envio de requisições HTTP muito fácil.  Basta criar uma instância do objeto, abrir uma url e enviar uma requisição
//O status HTTP do resultado assim como o seu conteúdo estarão disponíveis quando a transação for completada
//Pode ser utilizado para requisitar dados com APIS, para carregar conteúdo HTML, entre outras operações

//EXEMPLO - UTILIZANDO API DE CEP *************************************************************************************/
//https://viacep.com.br/

function Ajax(config){

    const xhr = new XMLHttpRequest();
    xhr.open(config.metodo, config.url, true)

    xhr.onload = function(e){

        if(xhr.status === "200"){ //Se o STATUS da requisição for 200

            config.sucesso(xhr.response);

        }else if(xhr.status >= "400"){ //Se o STATUS da requisição for igual a 400, ou superior

            config.erro({
                code: xhr.status,
                text: xhr.statusText
            });
        }
    }
}

const cep = "01001000";
let ajaxConfig = {
    url: "https://viacep.com.br/ws/"+ cep +"/json/",
    metodo: "GET",
    sucesso: (dataJSON) => {

        //Tratamento dos dados

        const dataObject = JSON.parse(dataJSON);
        console.log(dataObject);

    },
    erro: (errorObject) => {

        //Tratamento do erro
        
        console.log(`Código do erro: ${errorObject.code} | Texto do erro: ${errorObject.text}`);

    }

}

Ajax(ajaxConfig);