// ==== SOBRE GETTER E SETTER NO DART ==== //

// Métodos Getter e Setter // Existem termos reservados para desempenhar essas funções
// Getter e Setter não são chamados como funções, mas como se fossem atributos, isto é, sem parenteses()
// Setter admite apenas um parâmetro, e o Getter retorna apenas um dado - é preciso utilizar Arrays/Listas para coleções de dados, portanto
// Além disso, o método Getter não recebe parâmetros, e por isso, quando criado, não pode ter parenteses()

// ==== SOBRE ENCAPSULAMENTO NO DART ==== //

// Encapsulamento de atributos: podem ser públicos ou privados // Para serem privados, deve ser utilizado um underline na frente do nome do atributo
// O Encapsulamento no Dart não ocorre no nível da Classe, mas do arquivo/biblioteca - atributos privados são acessíveis na função main do código

void main() {
  Person objeto = new Person();

  // Recuperação dos valores padrão, via get
  List getReturn = objeto.getData;

  // Impressão dos valores recuperados
  print("Os valores padrão, definidos pelo construtor, são: Username = ${getReturn[0]}, Password = ${getReturn[1]}, Sex = ${getReturn[2]}");

  // Inserção de novos valores
  List setData = ["Pedro Alberto", "batata", "Masculino"];
  objeto.setData = setData;

  // Recuperação dos novos valores
  getReturn = objeto.getData;

  // Impressão dos novos valores
  print("Os valores atualizados, via método Setter, são: Username = ${getReturn[0]}, Password = ${getReturn[1]}, Sex = ${getReturn[2]}");
}

class Person {
  late String username;
  late String _password; // Atributo privado // Uso do underline _
  late String sex;

  // Construtor padrão
  Person() {
    this.username = "user_default";
    this._password = "pass_default";
    this.sex = "undefined";
  }

  // Método Getter // Retorna apenas 1 dado
  List get getData {
    List arrData = [this.username, this._password, this.sex];
    return arrData;
  }

  // Método Setter // Admite apenas 1 parâmetro
  void set setData(List data) {
    this.username = data[0];
    this._password = data[1];
    this.sex = data[2];
  }
}
