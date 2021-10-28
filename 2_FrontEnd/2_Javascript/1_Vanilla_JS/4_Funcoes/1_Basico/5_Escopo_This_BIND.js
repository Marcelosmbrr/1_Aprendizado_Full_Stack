//SOBRE ESCOPO, THIS E BIND**************************************************************/

//ESCOPO***********************************/

//Escopo é a acessibilidade de objetos, variáveis e funções em diferentes partes do código
//Em outras palavras, o que determina quais são os dados que podem ser acessados em uma determinada parte do código é o escopo

//Escopo global
let a = 2;

function foo () {

    //Escopo de foo
    let a = 5;

    function bar () {

        //Escopo de bar
      console.log(a);

    }
}

//Escopos superiores não conseguem acessar escopos internos, mas o contrário é permitido
//Se uma variável não pôde ser encontrada no escopo imediato, a engine irá procurar por ela no escopo externo mais próximo 
//Essa busca irá continuar até que o escopo global seja alcançado

//THIS***********************************/

//BIND***********************************/