// ==== CLASSE ASBTRATA E INTERFACE ==== //

/*

- A classe abstrata possui atributos e métodos, como qualquer outra
- A diferença é que não pode ser instanciada
- Uma classe abstrata é utilizável apenas quando é herdada

*/

void main(){

  Child obj = new Child("Palavra", 100);

  obj.metodo();

}

abstract class abstractParent {

  late String palavra;
  late int numero;

  abstractParent(this.palavra, this.numero);

  void metodo(){

    print("Esse método veio da classe abstrata");

  }

}

class Child extends abstractParent {

  Child(String palavra, int numero) : super(palavra, numero);

}