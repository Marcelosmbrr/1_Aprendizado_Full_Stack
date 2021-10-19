// ==== ITERADOR EXPAND ==== //

/*

- O iterador expande cria listas simples, ordenadas, a partir de listas multidimensionais
- Se uma lista possui, em cada índice, um outro array, cada um será tratado como um elemento
- Esse elemento será desfeito, para que cada item seja posicionado em um novo e único array unidimensional

*/

void main() {
  List<List> listaMulti = [
    [1, 2],
    [3, 4],
    [5, 6]
  ];

  expandList(listaMulti);
}

void expandList(List listaMulti) {

  List listaFlat = listaMulti.expand((indexList) => indexList).toList();
  print(listaFlat);
  
}
