// ==== INPUT NO DART ====

/*

- Para que haja entrada de dados, e leitura, é necessária a biblioteca nativa dart:io
- A biblioteca dart:io não é suportada no ambiente web, mas apenas em servidores, CLI, flutter mobile app e desktop app
- Aqui, nesse caso, o script será executado via CLI

Dart CLI: https://dart.dev/tutorials/server/cmdline
Lib necessária: https://api.dart.dev/stable/2.14.4/dart-io/dart-io-library.html

*/

import 'dart:io';
import 'dart:convert' show utf8;

void main() {
  stdout.write("Informe o seu nome:"); // stdout é o mecanismo de output padrão
  String? nome = stdin.readLineSync(); // stdin é o mecanismo de input padrão
  print("Seu nome é ${nome}"); // print e stdout fazem a mesma coisa, mas o primeiro é preferível
}
