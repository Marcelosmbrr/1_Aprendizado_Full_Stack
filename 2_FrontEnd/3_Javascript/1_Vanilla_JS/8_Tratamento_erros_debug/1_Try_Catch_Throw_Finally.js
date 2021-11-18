//TRATAMENTO DE ERROS COM TRY CATCH*************************************/
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Statements/try...catch

//As declarações try...catch marcam um bloco de declarações para testar (try),  e especifica uma resposta, caso uma exceção seja lançada

//MODELO
try {

    throw "Minha exception"; // gera uma exceção

}catch (exception) {

    // Declarações para manipular quaisquer exceções
    console.log("erro: "+ e);

}finally{ //Finally é opcional, e é executado em todos os casos, isto é, se ocorrer ou não uma exceção

   "Try Catch inalizado";

}

//EXEMPLO

function validaNumber(valor){

   if(isNaN(valor)){ //Se não for um Number

      throw "O valor precisa ser um Number"; //Lança uma exception e paralisa

   }else{

      return "É um número";

   }

}

try{

   let valor = "ABC";
   validaNumber(valor); //Se a exception for retornada, o catch é ativado

}catch(error){ //error recebe a exception

   console.log(error);

}finally{

   console.log("O número foi validado");
   
}