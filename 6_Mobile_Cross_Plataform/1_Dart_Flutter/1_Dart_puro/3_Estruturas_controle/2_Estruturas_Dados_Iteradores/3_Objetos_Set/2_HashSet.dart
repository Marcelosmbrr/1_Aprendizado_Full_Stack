// ==== OBJETO SET TIPO HASHSET ==== //

/*

- Em HashSet, os dados são armazenados de forma aleatoriamente desordenada
- Não tem acesso a índice // Usar a função .elementAt(index);
- Os elementos são armazenados entre chaves { }
- Aceita null

*/

import 'dart:collection';

void main() {
  hashSet();
}

void hashSet() {

  // Criação do objeto HashSet
  HashSet<dynamic> hashSetInt = HashSet();

  print("Verificação da tipagem HashSet: ${hashSetInt.runtimeType}");

  hashSetInt.add("A");
  hashSetInt.add("B");
  hashSetInt.add(null);
  hashSetInt.add(50);
  hashSetInt.add(2);
  hashSetInt.add(3);

  print("Objeto Set criado: ${hashSetInt}");

  // Acesso aos elementos
  print(hashSetInt.elementAt(5));

}
