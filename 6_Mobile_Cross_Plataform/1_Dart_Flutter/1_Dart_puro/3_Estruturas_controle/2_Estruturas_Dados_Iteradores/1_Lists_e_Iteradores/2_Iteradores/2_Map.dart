// ==== ITERADOR MAP ==== //
// A função Map itera sobre cada elemento de um array criando um outro, com o mesmo número de elementos
// A função Map utiliza uma callback que retorna um valor, a cada iteração, e esse valor é armazenado em um array de saída

void main() {
  iterandoLista1D();
}

void iterandoLista1D() {
  print("============================ FUNÇÃO MAP COM LISTA 1D ============================");

  List<int> listaInicial = [1, 2, 3, 4, 5];

  print("Lista de entrada: ${listaInicial}");

  var listaRetornada = listaInicial.map((element) => element * 10);

  print("Lista retornada: ${listaRetornada}");
}
