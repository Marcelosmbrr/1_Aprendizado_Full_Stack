//REQUISIÇÕES WEB ASSÍNCRONAS: AJAX COM A FETCH API
//https://developer.mozilla.org/pt-BR/docs/Web/API/Fetch_API/Using_Fetch
//https://www.devmedia.com.br/javascript-fetch/41206

//Esta tecnologia fornece o método global fetch(), que fornece uma maneira moderna, fácil e lógica para buscar recursos de forma assíncrona através da rede
//O retorno da invocação da função fetch é uma Promise
//A resposta obtida pelo Fetch não é uma estrutura JSON, e por isso deve haver a conversão, com uma nova Promise, para o tratamento dos dados

const cep = "01001000";
const url = "https://viacep.com.br/ws/"+ cep +"/json/";

fetch(url)
    .then(response => response.json()) //Retorno da conversão da estrutura de dados para JSON, criando uma nova Promise
    .then(responseJSON => { //A resolução da segunda Promise retornará um .then() com os dados em JSON

        //Tratamento dos dados

    })
    .catch(error => console.log("Erro: " + error));