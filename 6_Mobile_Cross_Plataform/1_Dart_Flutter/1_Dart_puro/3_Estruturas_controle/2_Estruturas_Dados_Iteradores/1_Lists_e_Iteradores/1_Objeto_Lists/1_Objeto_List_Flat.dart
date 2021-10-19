// ==== ARRAY/LISTA SIMPLES/LISTA FLAT NO DART ==== //

/*

- Talvez a estrutura de dados mais comum em quase todas as linguagens de programação seja o array
- No Dart, os arrays são na verdade objetos da classe List, que contém valores chamados de elementos, e que são acessados por índice
- Lista 1D, ou simplesmente "List", é um tipo de estrutura de dados que persiste dados de forma linear, representando elementos em uma linha com um índice

- Documentação: https://www.educative.io/edpresso/how-to-create-an-array-in-dart

*/

void main() {

  // Lista simples indexada - tipagem var
  var list = ["A", "B", 10, 20, true];
  print("O número de elementos da lista é igual a ${list.length}");

  var listA = ["Fulano", ...list]; // operador spread

  var listC = ["A", "B", "C"];

  // Funções básicas para listas simples
  listC.add("Elemento A"); // Adiciona o elemento no final do array
  listC.insert(4, "Elemento B"); // Adiciona o elemento no índice especificado
  print(listC);
  listC.removeAt(4); // Remove o elemento do índice especificado
  listC.removeRange(0, 2); //Remove os elementos existentes em um intervalo de índices
  listC.clear(); // Limpa o array
}
