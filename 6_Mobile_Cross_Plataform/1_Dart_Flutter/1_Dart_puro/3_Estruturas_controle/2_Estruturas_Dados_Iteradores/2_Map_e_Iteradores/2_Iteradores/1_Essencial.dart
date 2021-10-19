// ==== RESUMO - ITERAÇÃO OBJETO MAP ==== //

/*

- Método .keys, .values
- ForEach
- Map

*/

import 'dart:collection';

void main() {
  Map<String, String> objMap = {"KeyA": "A", "KeyB": "B", "KeyC": "C"};

  // Loops
  onlyKeys(objMap);
  onlyValues(objMap);
  bothKeyValue(objMap);

  // Função Map
  mapFunction(objMap);


}

// Recuperar chave 
void onlyKeys(Map objMap) {
  objMap.keys.forEach((k) => print("Key : $k"));
}

// Recuperar valor
void onlyValues(Map objMap) {
  objMap.values.forEach((v) => print("Value: $v"));
}

// Recuperar chave e valor
void bothKeyValue(Map objMap) {
  objMap.forEach((k, v) => print("Key : $k, Value : $v"));
}

// Função Map com objeto Map
void mapFunction(Map objMap) {

  var newMap = objMap.map((key, value) {

    if (key == "KeyA") {
      value = "AAA";
    } else if (key == "KeyB") {
      value = "BBB";
    } else {
      value = "CCC";
    }

    return MapEntry(key, value);

  });

  print(newMap);

}