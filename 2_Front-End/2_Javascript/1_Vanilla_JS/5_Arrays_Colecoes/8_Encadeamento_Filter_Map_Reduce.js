//EXEMPLO DE ENCADEAMENTO COM FILTER->MAP->REDUCE

//Encadear os métodos, fazendo com que um seja chamado após a execução do anterior, e utilizando seu retorno como argumento "valor"
//As funções callback são arrow functions de retorno implicito
//O "valor" é parâmetro de cada callback, e expressão após a flecha ""=>"" o retorno de cada uma
const resultado = nums.filter(valor => valor % 2 == 0).map(valor => valor * 2).reduce(function(ac, valor){ ac += valor; return ac; });
console.log(`FILTER|Filtro dos pares->MAP|dobro dos pares->REDUCE|acumulação->Valor final: ${resultado}`);