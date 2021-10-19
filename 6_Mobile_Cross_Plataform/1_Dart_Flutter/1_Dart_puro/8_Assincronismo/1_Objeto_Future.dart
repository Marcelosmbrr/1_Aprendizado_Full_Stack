// ==== ASSINCRONISMO EM DART - OBJETO FUTURE ==== //

/*

- Um futuro (minúsculo “f”) é uma instância da classe Future (maiúsculo “F”)
- É um objeto que representa um cálculo atrasado 
- Retorna o erro ou sucesso de uma operação assíncrona

Documentação: https://api.dart.dev/stable/2.14.4/dart-async/Future-class.html

*/

void main() {
  objetoFuture();
}

void objetoFuture() {

  for (int cont = 1; cont <= 3; cont++) {

    Future.delayed(Duration(seconds: cont), () {

      print("${cont * 33}%");

    });
  }

}
