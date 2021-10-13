/*

No Dart, a arrow function abrange apenas uma das possibilidades da sua versão no Javascript
Aqui, ela serve apenas para funções com retorno implicito

*/

void arrowFunction(int valorA, int valorB) {

  String exemploArrow(A, B) => "Retorno implícito de uma Arrow Function. Os valores são: ${A} e ${B}.";
  int somaArrow(A, B) => A + B;

  print(exemploArrow(valorA, valorB));
  print(somaArrow(20, 50));

}

void main() {

  int valorA = 2, valorB = 10;

  arrowFunction(valorA, valorB);
  
}
