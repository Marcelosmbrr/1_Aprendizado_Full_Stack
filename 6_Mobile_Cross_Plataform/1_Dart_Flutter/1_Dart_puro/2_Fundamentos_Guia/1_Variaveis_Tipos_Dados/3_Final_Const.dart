/*

- Final e Const são iguais quanto ao fato de que admitem apenas uma atribuição de valor
- O valor atribuído na inicialização não pode mudar

- A diferença entre Dart e Const pode ser dada apenas em termos de uso, apesar de ser mais profunda
- Na prática se verifica que o termo Final está para o valor final da variável em tempo de execução, e Const para o valor dela em tempo de compilação
- O Const é hard code, porque é definido no próprio código, pelo desenvolvedor. Exemplo: a = 1;
- Já o Final, é um valor atribuído em tempo de execução, e por isso pode variar, mas apenas enquanto não existir. Exemplo: uma resposta HTTP.

*/

void main(){

  const constNome = "Valor imutável, definido antes mesmo da compilação";

  bool a = true;
  final finalNome = a == true ? "Caso True: este é o valor final imutável" : "Caso False: este é o outro valor final imutável";

}