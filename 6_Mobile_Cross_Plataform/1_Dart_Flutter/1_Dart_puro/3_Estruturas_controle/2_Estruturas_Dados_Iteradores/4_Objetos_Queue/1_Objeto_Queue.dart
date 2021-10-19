// ==== OBJETO QUEUE ==== //

/*

- Queue é uma coleção ordenada entre chaves { }
- Não tem índice
- Serve para manipulações de inicio e fim

*/

import 'dart:collection';

void main() {
  objetoQueue();
}

void objetoQueue() {

  Queue<int> Fila = Queue();

  for (int cont = 0; cont < 10; cont++) {
    Fila.add(cont + 1);
  }

  Fila.addAll([11, 12, 13, 14, 15]);

  print(Fila);

  Fila.addFirst(0);
  Fila.addLast(16);

  print(Fila);
  
}
