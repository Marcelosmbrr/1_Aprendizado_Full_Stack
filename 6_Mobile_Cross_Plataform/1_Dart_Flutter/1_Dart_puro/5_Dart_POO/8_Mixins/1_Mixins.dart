// ==== SOBRE MIXIN - "HERANÇAS" EFICIENTES, UNITÁRIAS E MÚLTIPLAS ==== //

/*

- Basicamente, os Mixins são recursos presentes no Dart que nos permitem adicionar um conjunto de “características” a uma classe sem a necessidade de utilizar herança.
- Digamos que existe uma super classe "Pessoa", e 4 outras classes que herdam dela.
- Duas dessas 4 classes que herdam de pessoa precisam de alguns recursos adicionais. O que fazer?
- Se o método fosse implementado na super classe Pessoa, as que não precisam desses recursos adicionais também os teriam, o que é ineficiente.
- Para isso serve o Mixin. É como uma mini classe que serve apenas para ofertar recursos isolados.

Veja mais: https://www.treinaweb.com.br/blog/o-que-sao-mixins-e-qual-sua-importancia-no-dart

*/

void main() {
  // OBJETO FUNCIONÁRIO E TESTE COM SEU MIXIN "Demitir"
  Funcionario func = new Funcionario("Engenheiro", "Fulano da Silva", 22, "Masculino", "fulano@gmail.com");
  func.funcionarioInfo();
  func.demitir(func._nome);

  // OBJETO FORNECEDOR E TESTE COM SEU MIXIN "Negociar"
  Fornecedor forn = new Fornecedor("Casas Bahia", "Roberto Carlos", 42, "Masculino", "robertocarlos@outlook.com");
  forn.fornecedorInfo();
  forn.negociar(forn._nome, forn._empresa);
}

abstract class Pessoa {
  late String _nome;
  late int _idade;
  late String _sexo;
  late String _email;

  Pessoa(String nome, int idade, String sexo, String email) {
    this._nome = nome;
    this._idade = idade;
    this._sexo = sexo;
    this._email = email;
  }
}

class Funcionario extends Pessoa with Demitir {
  late String _cargo;

  Funcionario(this._cargo, String nome, int idade, String sexo, String email) : super(nome, idade, sexo, email);

  void funcionarioInfo() {
    print("====================== Dados do funcionário ======================");
    print("Nome: ${this._nome} \nIdade: ${this._idade} \nSexo: ${this._sexo} \nEmail: ${this._email} \nCargo: ${this._cargo}");
  }
}

class Fornecedor extends Pessoa with Negociar {
  late String _empresa;

  Fornecedor(this._empresa, String nome, int idade, String sexo, String email) : super(nome, idade, sexo, email);

  void fornecedorInfo() {
    print("====================== Dados do fornecedor ======================");
    print("Nome: ${this._nome} \nIdade: ${this._idade} \nSexo: ${this._sexo} \nEmail: ${this._email} \nEmpresa: ${this._empresa}");
  }
}

// Mixin utilizado apenas na classe Funcionário
// E pode ser reaproveitado para outras classes
mixin Demitir {
  void demitir(String nome) {
    print("(Mixin) O nome desse funcionário é ${nome}, e ele será demitido.");
  }
}

// Mixin utilizado apenas na classe Fornecedor
// E pode ser reaproveitado para outras classes
mixin Negociar {
  void negociar(String nome, String empresa) {
    print("(Mixin) Uma negociação será feita com o fornecedor cujo nome, e empresa, são, respectivamente, ${nome} e ${empresa}.");
  }
}
