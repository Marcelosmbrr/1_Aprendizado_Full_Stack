// ==== DART BASE64 E UTF8 ==== //

/*

- Codificação e decodificação de Base64
- Codificação e decodificação UTF8
- Necessária biblioteca 'dart:convert'

*/

import 'dart:convert';

void main() {
  String nome = "João do Galpão";

  encodeUTF8(nome);
  encodeBASE64(nome);
}

void encodeUTF8(String nome) {

  // ENCODE UTF8
  List<int> bytes = utf8.encode(nome);
  print("Valor codificado em UTF8: ${bytes}");
  
}

void encodeBASE64(String nome) {

  // ENCODE BASE64 // Passos necessários: UTF8 -> BASE64
  var bytes = utf8.encode(nome);
  var base64Str = base64.encode(bytes);
   print("Valor codificado em UTF8, e depois em Base64: ${base64Str}");
  
}
