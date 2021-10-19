/* 

- Como uma maneira de validar seu código, o Null Safety trouxe mais confiança na hora de escrevê-lo.
- O Sound Null Safety avisa o compilador sobre quais variáveis precisam de null check.

- No Dart, se uma variável não é inicializada, e é marcada pelo null check, basta que seja incluído um ? na sua tipagem.
- Por exemplo: String? nome;
- Outra possibilidde é utilizar o termo reservado "Late", para avisar o Dart de que a variável será preenchida no futuro.

Veja mais aqui: https://dart.dev/null-safety
E aqui: https://ateliware.com/blog/null-safety-em-dart 

*/

void main() {
  // LATE // O valor será inicializado no futuro // Não pode ser utilizado enquanto não receber um valor
  late String nome;
  //print(nome); erro
  nome = "Fulano";
  print(nome);

  // ? // O valor de inicialização é NULL
  String? valor;
  print(valor);
}
