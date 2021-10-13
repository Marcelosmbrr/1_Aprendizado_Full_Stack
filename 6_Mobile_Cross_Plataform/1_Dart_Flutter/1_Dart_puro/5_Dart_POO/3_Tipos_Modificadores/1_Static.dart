// ==== MODIFICADOR STATIC ==== //

// Valores configurados como Static existem em uma classe, e podem ser acessados sem objetos

void main() {
  print("O valor do atributo Static é: ${Example.valor}");

  print(Example.staticFunction);
}

class Example {

  static String? valor; // Valor null

  static void staticFunction() {

    print("Esse é um método estático");

  }
}
