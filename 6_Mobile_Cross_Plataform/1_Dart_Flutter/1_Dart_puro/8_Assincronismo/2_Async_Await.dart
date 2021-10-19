// ==== ASSINCRONISMO EM DART - ASYNC AWAIT ==== //

/*

- Uma operação síncrona é a que bloqueia a execução do código até que seja concluída
- Já, em contraste, a operação assíncrona é executada em paralelo com quaisquer outras

- Async Await são funcionalidades que operam juntas, e servem para criar operações assíncronas
- Primeiro é usado o termo Async, que serve para indicar que a operação é assíncrona
- A função Async, por si só, representa uma Promise
- Ela pode ter um Await, que é uma operação que paralisa a função assíncrona, criando uma nova Promise para uma outra operação

*/

void main() {
  asyncFunction();
}

void asyncFunction() async {

  await Future.delayed(const Duration(seconds: 5));

  print("Await concluído");

}
