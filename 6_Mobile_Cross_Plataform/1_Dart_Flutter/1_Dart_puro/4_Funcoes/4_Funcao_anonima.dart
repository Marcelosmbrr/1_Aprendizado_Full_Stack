/*

- Funções anônimas são funções sem nome
- São normalmente utilizadas com Funções Arrow

*/

void main() {
  var funcaoAnonima = () => print("A função anônima foi chamada");
  funcaoAnonima();

  int valor = 10;
  var funcaoAnonima2 = (int valor) => print("A variável possui o valor: ${valor}");
  funcaoAnonima2(valor);

  var funcaoAnonima3 = (Function funcaoAnonimaParametro) => funcaoAnonimaParametro();
  funcaoAnonima3(() => print("Função Anônima como parâmetro"));
}
