// ==== TIPAGEM DE FUNÇÕES ==== //

/*

- É possível e necessário tipar as funções no Dart
- Tipar uma é na verdade definir o tipo do seu retorno
- Também é necessário tipar os seus parâmetros

*/

void main() {
  primeiroExemplo("Fulano da Silva");
  print("Retorno da segunda função - retorno String: ${segundoExemplo()}");
  print("Retorno da terceira função - retorno int: ${terceiroExemplo()}");
  print("Retorno da quarta função - retorno List: ${quartoExemplo()}");
  print("Retorno da quinta função - retorno Map: ${quintoExemplo()}");
}

void primeiroExemplo(String nome) {}

String segundoExemplo() {
  String retorno = "Batman";
  return retorno;
}

int terceiroExemplo() {
  int retorno = 105;
  return retorno;
}

List<int> quartoExemplo() {
  List<int> retorno = [100, 200, 300, 400, 500];
  return retorno;
}

Map<String,dynamic> quintoExemplo() {
  Map<String,dynamic> retorno = {"nome": "Fulano", "sexo": "masculino", "idade": 45, "vivo": false};
  return retorno;
}
