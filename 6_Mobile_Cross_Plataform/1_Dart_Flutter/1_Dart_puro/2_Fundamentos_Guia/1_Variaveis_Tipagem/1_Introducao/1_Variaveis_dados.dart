/* 

- O código do Dart é tipado, embora possa inferir o tipo do valor inicial
- Sua estrutura é parecida com a da linguagem C/C++; um exemplo disso é a necessidade da função "main"
- Além disso, como surgiu para ser um concorrente do JS, o Dart tem algumas semelhanças com ele também
- Diferente de JS, é necessário utilizar ponto e vírgula no final das sentenças

*/

main(){

  print("Hello" " World");

  // ==== A TIPAGEM PRÉVIA É NECESSÁRIA PARA VALORES NÃO INICIALIZADOS - MAS PODE SER UTILIZADA NOS DOIS CASOS ==== //
  int inteiroA, inteiroB;
  inteiroA = 10;
  inteiroB = 5;

  print("A soma dos valores inteiros é igual a ${inteiroA + inteiroB}");

  double doubleA, doubleB;
  doubleA = 100.5;
  doubleB = 20.2;

  print("A soma dos valores flutuantes é igual a ${doubleA + doubleB}");

  bool boolean;
  boolean = true;

  print("O valor do booleano é: " + "${boolean}");

  String nome;
  nome = "Fulano da Silva";

  print("O nome da pessoa é: ${nome}");

  // ==== TIPAGEM DINÂMICA PODE SER UTILIZADA PARA VALORES INICIALIZADOS ==== //
  // Com o termo reservado "var", é possível inicializar variáveis dinâmicamente
  // No entanto, não é permitido, após a primeira inicialização, que a variável altere o seu tipo

  var pessoaNome = "Fulano Beltrano";
  var pessoaIdade = 23;
  var pessoaPeso = 60.2;

  print("A pessoa de nome $pessoaNome tem $pessoaIdade, e também pesa $pessoaPeso");
  print("O tipo da variável pessoaIdade é: ${pessoaIdade.runtimeType}");

  // ==== IMPRESSÃO DE VALORES ==== //
  var variable = 2;
  print("Primeira forma - \${variable}: ${variable} || Segunda forma - \$variable: $variable");

}