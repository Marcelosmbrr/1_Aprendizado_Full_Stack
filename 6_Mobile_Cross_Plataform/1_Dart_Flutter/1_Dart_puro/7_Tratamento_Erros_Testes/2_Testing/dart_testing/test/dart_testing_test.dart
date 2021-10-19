import 'package:dart_testing/dart_testing.dart'; // Importação dos arquivos cujo código será testado
import 'package:test/test.dart';  // Importação da lib de testes

void main() {

  // TESTE COM 'TEST' // Esse tipo de teste é realizado com a função 'Test'
  // O teste é a comparação de um valor dinâmico com um valor esperado

  // Exemplo
  test("Conversão de String em array", () {
    String nomes = "Fulano,Beltrano,Ciclano";
    expect(nomes.split(","), equals(["Fulano", "Beltrano", "Ciclano"])); // Expect(valor, valor_esperado)
  });

  // Exemplo de erro
  test("Soma de valores", () {
    int a = 10, b = 20, c = 30;
    int soma = a + b + c;
    expect(soma, 100); 
  });
}
