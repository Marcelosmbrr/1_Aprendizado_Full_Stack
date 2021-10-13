// ==== INTERFACE NO DART ==== //

/*

- Interfaces são modelos de classes para serem herdadas por outras - sim, como uma classe abstrata
- A diferença é que uma interface não tem construtor, só atributos e métodos 
- Outro fato é que interfaces não são herdadas com o termo "extends", mas com o termo "implements"
- Outro fato relevante, é que todos os métodos e atributos de uma interface implementada devem ser utilizado
- Em outras linguagens existe o termo reservado "interface" para criar uma, já no Dart é uma convenção
- No Dart, normalmente as interfaces são criadas convencionalmente como classes abstratas sem construtor

*/

void main() {
  Example obj = new Example("Blablablabla");
  obj.interfaceFunction();
}

abstract class Interface {
  String? interfaceAttr;

  void interfaceFunction() {
    // Conteúdo definido na classe que implementa a interface
  }
}

class Example implements Interface {
  @override
  String? interfaceAttr;

  Example(String data) {
    this.interfaceAttr = data;
  }

  @override
  void interfaceFunction() {
    print("Esse método pertence à interface implementada. Foi herdado e sobreescrito.");
    print("O atributo da interface também pertence à interface implementada, e foi sobreescrito.");
    print("Seu valor na interface era null, mas na classe que a implementou, foi definido no construtor");
    print("O valor do atributo herdado da interface, agora é: ${this.interfaceAttr}");
  }
}
