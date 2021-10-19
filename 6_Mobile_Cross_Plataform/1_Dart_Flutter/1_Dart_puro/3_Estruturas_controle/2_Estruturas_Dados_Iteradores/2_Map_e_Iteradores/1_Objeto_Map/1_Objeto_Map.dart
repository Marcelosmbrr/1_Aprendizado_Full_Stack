// ==== OBJETO MAP ==== //

/*

- Usado para ler os elementos usando uma chave - são os objetos chave-valor do Dart
- A estrutura utiliza { }
- As chaves são única e os valores não se repetem
- Sua tipagem é com duas definições: a primeira define o tipo das chaves, e a segunda o dos valores

Documentação: https://api.dart.dev/stable/2.14.4/dart-core/Map-class.html

*/

import 'dart:collection';

void main() {
  objetoMap();
}

void objetoMap() {
  // Criação literal
  Map<String, dynamic> objMap = {"nome": "Fulano da Silva", "sexo": "Masculino", "idade": 55};

  // Criação com [chave] = valor
  objMap["nacionalidade"] = "Brasileiro";
  objMap["trabalho"] = "Programador";

  // Algumas funções // Procura por chave, valor, e update de valor
  print("O objeto Map possui a chave 'Nacionalidade'? ${objMap.containsKey("nacionalidade")}"); // Não é case sensitive
  print("O objeto Map possui o valor 'Masculino'? ${objMap.containsValue("Masculino")}"); // Não é case sensitive
  objMap.update("nome", (valor) => "Robertin", ifAbsent: () => "Chave inexistente");
  print("Atualização do campo nome para 'Robertin': ${objMap}");
  
}
