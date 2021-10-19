// ==== TIPAGEM NO DART ==== //

/*

- O código do Dart é fortemente tipado
- Variáveis, estruturas de dados, funções, são exemplos de coisas que podem e devem ser tipadas
- Mesmo sendo fortemente tipada, também existe tipagem dinâmica na linguagem Dart

*/

void main() {
  // ==== TIPAGEM ESTÁTICA ==== //

  // STRING // Não pode ser redeclarado // O valor é mutável, mas o tipo não
  String nome = "Fulano da Silva";
  nome = "Fulana da Silva";

  // INT // Não pode ser redeclarado // O valor é mutável, mas o tipo não
  int numero = 123;
  numero = 130;

  // DOUBLE // Não pode ser redeclarado // O valor é mutável, mas o tipo não
  double num = 102.33;
  num = 105.896;

  // BOOL // Não pode ser redeclarado // O valor é mutável, mas o tipo não
  bool booleano = true;
  booleano = false;

  // ==== TIPAGEM DINÂMICA ==== //

  // VAR // Aceita qualquer tipagem na inicialização (apenas) // Não pode ser redeclarado // O valor é mutável, mas o tipo não
  var v = "ABC";
  var vv = 123;
  var vvv = false;

  // DYNAMIC // Aceita qualquer tipagem // Não pode ser redeclarado // O valor e o tipo são mutáveis
  dynamic d = "ABC";
  d = true;
  d = 123456.12;
  d = 10;
  print("Valor final de 'd' é: ${d}");
}
