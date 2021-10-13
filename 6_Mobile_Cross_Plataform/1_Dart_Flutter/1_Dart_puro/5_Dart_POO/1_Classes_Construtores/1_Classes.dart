// ==== Ideia básica de uma classe no Dart, e sem construtor, por enquanto ==== //

void main() {
  Pessoa objeto = new Pessoa();
  objeto.setData("Fulano de Tal", 23);
  objeto.printInfo();
}

class Pessoa {
  // O "Late" serve para dizer ao Dart que as variáveis receberão valores no futuro
  // Sem ele, ou um indicador ? de nulo, na tipagem, o Null Safety será ativado
  late String name;
  late int age;

  void setData(String name, int age) {
    this.name = name;
    this.age = age;
  }

  void printInfo() {
    print("O nome da pessoa é ${this.name}, e sua idade é ${this.age}.");
  }
}
