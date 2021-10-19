// ==== DART TIMER ==== //

/*

- Timer é um temporizador - funciona como o setTimeOut do Javascript
- Recebe dois argumentos: um tempo, que é uma instância da classe Duration, e uma função para executar
- Necessita da biblioteca 'dart:async'

*/

import 'dart:async';

int contador = 0;

void main() {
  temporizadorTimer();
}

//
void temporizadorTimer() {

  // Uma função é executada após um determinado tempo
  Timer(Duration(seconds: 5), () => print("Hello World!"));

  // Uma função é executada em loop após um determinado tempo 
  // O loop deve ser interrompido com .cancel()
  Timer.periodic(Duration(seconds: 1), (Timer timer) {
    contador++;
    if (contador == 4) {
      print("Passaram-se 4 segundos!");
    } else if (contador == 6) {
      print("Passaram-se 6 segundos!");
    } else if (contador == 10) {
      print("Passaram-se 10 segundos! Script finalizado!");
      timer.cancel();
    }
  });
}
