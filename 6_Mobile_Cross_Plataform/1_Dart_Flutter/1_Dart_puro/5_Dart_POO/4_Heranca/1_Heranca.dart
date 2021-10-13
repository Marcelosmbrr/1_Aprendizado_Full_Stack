// ==== HERANÇA DE CLASSES NA ORIENTAÇÃO A OBJETO DO DART ==== //

/*

- Os atributos da classe parent são definidos com o termo reservado "super" no construtor da classe child
- "Super" é o chamado do construtor da classe que é herdada
- Se o construtor for nomeado, Super deve incluir o seu nome com a notação de ponto. Ex: super.namedConstructor()
- Na classe herdeira os parâmetros herdados devem ser tipados
- Os construtores das classes child NÃO precisam ser inline, apesar de nesse exemplo todos serem

*/

void main() {
  Cachorro obj = new Cachorro("Robertin", "Chihuahua", "Masculino", 5, "Animalia", false);
  obj.cachorroInfo();
  obj.animalDormir(obj.nome);
}

// Classe Animal
class Animal {
  late int idade;
  late String reino;
  late bool calmo;

  // Construtor padrão // Forma inline
  Animal(this.idade, this.reino, this.calmo);

  void animalInfo() {
    print("O reino do animal é ${this.reino} e a sua idade é ${this.idade}");
  }

  void animalDormir(String nome) {
    print("${nome} foi dormir");
  }
}

// Classe Mamífero
class Mamifero extends Animal {
  late String sexo;

  // Construtor padrão // Forma inline // Tipagem dos atributos herdados
  Mamifero(this.sexo, int idade, String reino, bool calmo) : super(idade, reino, calmo);

  void mamiferoInfo() {
    print("O animal é um mamífero do sexo ${this.sexo}, pertence ao reino ${this.reino}, e sua idade é ${this.idade}");
  }
}

// Classe Vaca
class Cachorro extends Mamifero {
  late String nome;
  late String raca;

  // Construtor padrão // Forma inline // Tipagem dos atributos herdados
  Cachorro(this.nome, this.raca, String sexo, int idade, String reino, bool calmo) : super(sexo, idade, reino, calmo);

  void cachorroInfo() {
    print("Veja abaixo os dados do cachorro..");
    print("Nome: ${this.nome}\nRaça: ${this.raca} \nSexo: ${this.sexo} \nIdade: ${this.idade} \nCalmo: ${this.calmo ? "É calmo" : "Não é calmo"}");
  }
  
}
