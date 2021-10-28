//REQUISIÇÕES WEB ASSÍNCRONAS: AJAX COM AXIOS
//https://blog.rocketseat.com.br/axios-um-cliente-http-full-stack/

//Axios é um cliente HTTP baseado em Promises para fazer requisições
//É um projeto open source, disponível no Github https://github.com/axios/axios
//Diferentemente do Fetch, com o Axios a resposta da requisição já pode ser obtida no formato de Objeto Javascript

//Tendo realizado o download da biblioteca, e linkado ao arquivo onde será implementado...
const cep = "01001000";
const url = "https://viacep.com.br/ws/"+ cep +"/json/";

axios(url).then(response => {
    
    //Tratamento dos dados
    //Para ter em mãos a response em formato de Objeto, deve utilizar response.data
})


