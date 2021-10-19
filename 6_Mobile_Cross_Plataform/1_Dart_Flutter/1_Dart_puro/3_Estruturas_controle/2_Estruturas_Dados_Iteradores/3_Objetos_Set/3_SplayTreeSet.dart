// ==== OBJETO SET TIPO SPLAYTREESET ==== //

/*

- Organiza automaticamente os elementos em ordem crescente, numericamente ou alfabeticamente, comparando-os
- Não tem acesso a índice // Usar a função .elementAt(index);
- Os elementos são armazenados entre chaves {}
- Não aceita null, porque não é um valor comparável

*/

import 'dart:collection';

void main() {
  splayTreeSet();
}

void splayTreeSet() {

  // Criação do objeto Set
  SplayTreeSet<String> splaySetInt = SplayTreeSet();

  print("Verificação da tipagem Set: ${splaySetInt.runtimeType}");

  // Inserção de dados
  splaySetInt.add("Teste1");
  splaySetInt.add("Teste2");
  splaySetInt.add("Teste3");
  splaySetInt.add("TesteC");
  splaySetInt.add("TesteB");
  splaySetInt.add("TesteA");

  print("Objeto Set criado: ${splaySetInt}");

  // Acesso aos elementos
  print(splaySetInt.elementAt(0));
  
}