// ==== LISTA MULTIDIMENSIONAL NO DART ==== //

/*

- No Dart não se cria Listas multidimensionais de forma literal, mas com um método da classe "List" chamado "generate".
- Esse método gera uma lista de valores e pode ser usado para criar uma lista 2D e 3D
- A lógica de uma lista multidimensional no Dart é que em cada índice é criada uma nova Lista, e assim ela se torna uma Lista de Listas

*/

void main() {
  criaListaSimples();
  criaLista2D();
}

void criaListaSimples() {

  // Tamanho final da lista 1D
  final int size = 10;

  var listaSimples = new List<String>.generate(size, (int index) => "Col${index}");
  print("============ GENERATE: LISTA SIMPLES - 1D ================================================");
  print(listaSimples);
  print("\nOs elementos dessa lista são valores em si, e que são acessados por índices unitários.");
  print("Exemplo: o valor existente na posição [0] é: ${listaSimples[0]}");
}

void criaLista2D() {

  // Quantidade de linhas
  final int rows = 3;

  print("============ GENERATE: LISTA MULTI - 2D ==================================================");
  var listaMulti = new List.generate(rows, (index) => ["Lin${index}Col0", "Lin${index}Col1", "Lin${index}Col2", "Lin${index}Col3"]);
  print(listaMulti);
  print("\nOs elementos dessa lista são listas. Ou seja, existe uma lista em cada índice da lista, fazendo dela uma lista de listas.");
  print("Os elementos dessa lista são acessados por índices multidimensionais.");
  print("Exemplo: o valor existente na posição [0][0] é: ${listaMulti[0][0]}");
}
