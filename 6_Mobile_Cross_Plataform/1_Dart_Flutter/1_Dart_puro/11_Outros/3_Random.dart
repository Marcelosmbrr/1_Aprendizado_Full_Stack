// ==== DART RANDOM ==== //

/*

- Função para criar valores aleatoriamente
- Necessária a biblioteca 'dart:math'

*/

import 'dart:math';

void main() {
  var random = new Random();

  var min = 0, max = 10;

  print(random.nextInt(max));
  
}
