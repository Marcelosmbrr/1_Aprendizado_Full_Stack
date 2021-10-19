// ==== ITERADOR WHERE (FILTER DO JS) ==== //
// Esse iterador é como o Map no sentido de que retorna um novo array de elementos
// Mas, diferente do Map, o Filter pode retornar um com menos elementos, porque possui um sistema de filtro

void main() {
  iterandoLista1D();
}

void iterandoLista1D() {
  print("============================ FUNÇÃO FILTER COM LISTA 1D ============================");

  List<dynamic> listaInicial = [1.5, 2, 3.2, 4, 5, 6.054, 7, 8, 9, 10.02];

  print("Lista de entrada: ${listaInicial}");
  print("Critério do filtro: valor inteiro e igual ou maior do que 5");

  var listaRetornada = listaInicial.where((element) => element is int && element >= 5);

  print("Lista retornada: ${listaRetornada}");

}
