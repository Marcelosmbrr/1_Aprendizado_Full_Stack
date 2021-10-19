// ==== TIPAGEM DE ESTRUTURAS DE DADOS ==== //

/*

- As estruturas de dados no Dart são todas objetos
- Até mesmo os clássicos arrays são tratados como objetos 

- Abaixo serão mostrados dois exemplos de estruturas: List e Map
- Existem outros dois ainda, o objeto Queue e o Set

*/

void main() {

  // LIST<tipagem_elementos> // Listas são arrays indexados criados com colchetes [ ]
  List<int> listInt = [1, 12, 23, 56]; // Lista 1D de inteiros
  print("O terceiro elemento, posição [2], da Lista unidimensional é ${listInt[2]}");

  List<List<String>> listMulti = [["A", "B", "C"],["D", "E", "F"]]; // Lista 2D de Listas com strings
  print("O elemento existente na posição [1][2] é ${listMulti[1][2]}");

  // MAP<tipagem_chave, tipagem_valor> // Mapas são objetos estruturados com key: value, e criados com chaves { }
  Map<String, int> objMap = {"valor1": 10, "valor2": 15}; // Mapa com chave string e valor inteiro
  print("O valor existente na primeira chave é ${objMap["valor1"]}");

  Map<String, List<dynamic>> objMap_ = {"lista1": ["A", "B", 10], "lista2": [true, 45, 12.2]}; // Mapa com chave string e valor lista de elementos dynamic
    
}
