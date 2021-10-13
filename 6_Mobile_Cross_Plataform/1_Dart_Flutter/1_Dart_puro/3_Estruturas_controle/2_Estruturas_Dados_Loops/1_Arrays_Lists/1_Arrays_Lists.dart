/*

- Talvez a coleção mais comum em quase todas as linguagens de programação seja o array, ou grupo ordenado de objetos
- No Dart, os arrays são objetos List, então a maioria das pessoas os chamam apenas de listas
- Documentação: https://dart.dev/guides/language/language-tour#lists

*/

void main(){

  // ==== LISTA/ARRAY INDEXADO - TIPAGEM DINÂMICA DOS ÍNDICES ==== //
  var list = ["A", "B", 10, 20, true];
  print("O número de elementos da lista é igual a ${list.length}");

  var listA = ["Fulano", ...list]; // operador spread

  // ==== LISTA MULTIDIMENSIONAL ==== //
  // Não é possível acessar elementos de array multidimensionais da forma convencional

  // ==== FUNÇÕES PARA ARRAYS ==== //
  var listC = ["A", "B", "C"];

  listC.add("Elemento A"); // Adiciona o elemento no final do array
  listC.insert(4, "Elemento B"); // Adiciona o elemento no índice especificado
  print(listC);
  listC.removeAt(4); // Remove o elemento do índice especificado
  listC.removeRange(0, 2); //Remove os elementos existentes em um intervalo de índices
  listC.clear(); // Limpa o array



  
}