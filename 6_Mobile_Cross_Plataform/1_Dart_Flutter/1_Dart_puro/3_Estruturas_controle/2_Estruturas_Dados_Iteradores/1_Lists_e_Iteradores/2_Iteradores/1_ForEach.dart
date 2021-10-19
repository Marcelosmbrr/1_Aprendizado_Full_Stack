// ==== ITERADOR FOREACH ==== //
// A função forEach itera sobre cada elemento do array, capturando-o com uma callback

void main() {
  iterandoLista1D();
  iterandoListaMultidimensional();
}

// Iterando sobre uma lista simples
void iterandoLista1D() {
  List<String> list1D = ["A", "B", "C", "D", "E"];

  int contador = 0;

  print("============================ FUNÇÃO FOREACH COM LISTA 1D - 1 LINHA COM N COLUNAS ============================");
  list1D.forEach((element) {
    print("Elemento do índice ${contador}: ${element}");
    contador = contador + 1;
  });
}

// Iterando sobre uma lista multidimensional
void iterandoListaMultidimensional() {
  final int rows = 3;

  int contador = 0;

  var list2D = new List.generate(rows, (index) => ["Lin${index}Col0", "Lin${index}Col1", "Lin${index}Col2"]);

  print("============================ FUNÇÃO FOREACH COM LISTA 2D - N LINHAS COM N COLUNAS ============================");
  list2D.forEach((arrayRow) {
    print("--------------- LINHA ${contador} ---------------");

    arrayRow.forEach((rowElement) {
      print("Elemento: ${rowElement}");
    });

    print("--------------- FIM DA LINHA ${contador} ---------------");
    contador = contador + 1;
  });
}
