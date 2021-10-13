// ==== DART OVERRIDE - SOBREESCRITA DE MÉTODOS ==== //

/*

- Override significa substituir ou sobreescrever
- O override é feito para que uma classe filha possa dar sua própria implementação ao método que já é fornecido pela classe pai
- Ou seja, é um outro nome para polimorfismo
- Para utilizar o mesmo nome de um método da classe Parent, deve ser utilizado o termo reservado @override

*/

void main() {
  Child obj = new Child("Valor do atributo da classe filha", "Valor do atributo da classe pai");
  obj.parentFunction();
}

class Parent {
  String? parentAttr;

  Parent(this.parentAttr);

  void parentFunction() {
    print("Esse é o método 'parentFunction' da classe Parent!");
  }
}

class Child extends Parent {
  String? childAttr;

  Child(this.childAttr, String parentAttr) : super(parentAttr);

  @override
  void parentFunction() {
    print("Esse é o método cujo nome é 'parentFunction', existente na classe Parent, mas com comportamento modificado e definido na classe Child!");
  }
}
