// ==== DART TESTING ==== //

/*

- A primeira funcionalidade para testes é o Assert
- Ele usa a lógica booleana para testar afirmações no modo Debug - utilizar o debug do vscode e não o code runner
- Try/Catch pode ser usado para tratar as exceptions

- A segunda funcionalidade é o Test
- É um recurso disponibilizado por um pacote de nome "Test" - ele deve existir nas dependências do projeto
- Para ser executado, basta digitar o comando de terminal "pub run test"
- Projetos Dart tem uma pasta chamada "Test", e é o arquivo existente nela que é executado
- Podem ser realizados testes com variáveis, funções e grupos de testes

Síntaxe:

test('Descrição', (){
  expect(valorReal, valorEsperado)
});

*/

import 'package:dart_testing/dart_testing.dart' as dart_testing;

void main() {

  // TESTE COM 'ASSERT' // Esse tipo de teste é realizado com o mecanismo de Debug
  String? texto;

  try {
    assert(texto != null);
  } catch (exception) {
    print("Exceção: ${exception}");
  } finally {
    print("Verificação finalizada!");
  }

  // Para o segundo tipo de teste, verificar o arquivo "dart_testing.dart" existente na pasta "test"
}
