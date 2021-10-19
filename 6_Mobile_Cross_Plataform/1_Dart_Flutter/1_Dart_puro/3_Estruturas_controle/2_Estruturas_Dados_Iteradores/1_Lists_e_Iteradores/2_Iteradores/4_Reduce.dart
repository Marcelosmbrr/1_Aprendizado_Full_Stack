// ==== ITERADOR REDUCE ==== //
// Assim como o Map e o Where, o Reduce retorna um novo valor
// Mas, a diferença é que se trata de um único novo elemento // Por isso seu nome é "Reduce" - ele reduz a Lista
// Na sua operação o Reduce tem dois parâmetros: o elemento do índice anterior, e o do índice atual
// No primeiro loop, o índice 0 se torna o anterior, e o 1 se torna o atual

void main() {
  iterandoLista1D();
}

void iterandoLista1D() {
  print("============================ FUNÇÃO REDUCE COM LISTA 1D ============================");

  List<String> listaInicial = ["F", "L", "A", "R", "E"];

  print("Lista de entrada: ${listaInicial}");

  String valorRetornado = listaInicial.reduce((anterior, atual) {
    return anterior + atual;
  });

  print("Retorno do Reduce: ${valorRetornado}");
  
}
