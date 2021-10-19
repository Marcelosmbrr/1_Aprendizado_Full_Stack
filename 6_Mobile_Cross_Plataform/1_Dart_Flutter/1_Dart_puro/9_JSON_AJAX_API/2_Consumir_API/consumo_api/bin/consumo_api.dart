import 'dart:convert';

import 'package:consumo_api/consumo_api.dart' as consumo_api;
import 'package:http/http.dart' as http;

void main() async {
  String cep = "01001000";
  var url = Uri.parse('https://viacep.com.br/ws/${cep}/json/');

  print("Buscando dados...");

  var response = await http.get(url);

  print("Response status: ${response.statusCode}");
  print("Conteúdo da response: ${response.body}");

  // Decodificação do JSON de resposta
  var data = jsonDecode(response.body);

  print("Tipagem da resposta decodificada: ${data.runtimeType}");
  print("Logradouro: ${data['logradouro']}");
  
}
