// ==== JSON NO DART ==== //

/*

- A biblioteca dart: convert (referência da API) tem conversores para JSON e UTF-8
Documentação: https://dart.dev/guides/libraries/library-tour#dartconvert---decoding-and-encoding-json-utf-8-and-more

*/

import 'dart:convert';

void main() {

  Map<String,dynamic> data = {"nome": "Marcelo Moreira", "sexo": "masc", "idade": 23};

  dataJsonEncode(data);

}

// Codificação dos dados em JSON
dataJsonEncode(Map data) {
  var dataEncoded = jsonEncode(data);
  print("Tipagem do JSON dos dados: ${dataEncoded.runtimeType}");

  dataJsonDecode(dataEncoded);
}

// Decodificação do JSON dos dados
void dataJsonDecode(String data) {
  var dataDecoded = jsonDecode(data);

  print("Tipagem do JSON decodificado: ${dataDecoded.runtimeType}");
}
