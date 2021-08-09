//FUNÇÕES SUCESSIVAS
//https://diessi.ca/blog/encadeamento-de-metodos-em-javascript/
//O encadeamento de métodos (“method chaining”) é uma técnica usada para invocar diversos métodos

const valor = 10;
const cotacao = 5;

//Arrow functions com retorno implicito
const converter_dolar = (valor, cotacao) => valor * cotacao;
const valorMonetario = (elemento) => `$ ${parseFloat(elemento).toFixed(2).replace('.', ',')}`; //Encadeamento

const valorCotado = converter_dolar(valor, cotacao);
const valorDolar = valorMonetario(valorCotado);

console.log(valorDolar);

