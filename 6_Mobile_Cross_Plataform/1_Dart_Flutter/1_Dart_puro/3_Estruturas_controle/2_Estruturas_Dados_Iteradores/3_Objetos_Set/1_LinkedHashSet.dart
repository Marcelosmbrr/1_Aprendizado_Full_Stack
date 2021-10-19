// ==== OBJETO SET TIPO LINKEDHASHSET ==== //

/*

- Em LinkedHashSet, os dados são armazenados com base no pedido de inserção
- Não tem acesso a índice // Usar a função .elementAt(index);
- Os elementos são armazenados entre chaves {}
- Aceita null

*/

import 'dart:collection';

void main() {
  linkedHashSet();
  linkedHashSetFunctions();
}

void linkedHashSet() {

  // Criação do objeto LinkedHashSet
  Set<int> setInt = Set();

  print("Verificação da tipagem Set: ${setInt.runtimeType}");

  // Inserção de dados
  setInt.add(10);
  setInt.add(20);
  setInt.add(30);
  setInt.add(40);

  print("Objeto Set criado: ${setInt}");

  // Acesso aos elementos
  print(setInt.elementAt(0));
}

void linkedHashSetFunctions() {
  // Funções para objeto Set
  Set<int> objSetA = {1, 20, 10, 5, 30, 250, 7560, 89};
  Set<int> objSetB = {1, 30, 0, 7, 31, 240, 7541, 89};

  print("Elementos diferentes entre os dois objetos: ${objSetA.difference(objSetB)}");
  print("União dos dois objetos, sem a duplicação dos elementos iguais: ${objSetA.union(objSetB)}");
  print("Intersecção dos objetos: ${objSetA.intersection(objSetB)}");
  print("Procura por elemento, e retorne dele: ${objSetA.lookup(30)}");
  
}
