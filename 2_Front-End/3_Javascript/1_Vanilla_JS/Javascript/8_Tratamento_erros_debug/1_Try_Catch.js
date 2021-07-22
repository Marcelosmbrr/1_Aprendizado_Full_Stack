//TRATAMENTO DE ERROS COM TRY CATCH*************************************/
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Statements/try...catch

//As declarações try...catch marcam um bloco de declarações para testar (try),  e especifica uma resposta, caso uma exceção seja lançada
try {
    throw "Minha exception"; // gera uma exceção
 }
 catch (exception) {
    // Declarações para manipular quaisquer exceções
    console.log("erro: "+ e);
 }