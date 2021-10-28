//MÉTODO SPLICE ************************************************************/
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Array/splice
//https://ricardo-reis.medium.com/splice-969723f47d26

//O método splice() permite inserir novos elementos e excluir elementos existentes em um array simultaneamente

// DELETAR ELEMENTOS COM SPLICE********************************/
const arrayDel = ["A", "B", "C", "D", "E"];

// Retorna o elemento removido em um array, porque pode ser mais do que um

// A partir do índice 3, remover 2 elementos // Será D e E
var deleteSplice = arrayDel.splice(3, 2); 
console.log(arrayDel);
console.log("Resultado da remoção: " + deleteSplice);

//O índice pode ser negativo
//A indexação seria da direita para esquerda, a partir de -1

// ADICIONAR ELEMENTOS COM SPLICE********************************/
const arrayIn = ["Mario", "Fulano", "Roberto"];

// O primeiro argumento é o índice em que os elementos passarão a ser inseridos //Se existir algo no índice, esse algo será deslocado para direita
// O segundo argumento é zero 0 que dá o comando ao método splice() para não excluir nenhum elemento
// O terceiro argumento, o quarto e assim por diante, são os valores dos novos elementos
var insertSplice = arrayIn.splice(2,0,"ELEMENTO");
console.log("Resultado da adição: "+ arrayIn);