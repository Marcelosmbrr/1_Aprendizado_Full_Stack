// ==== MÉTODOS CONSTRUTORES NO DART ==== //

// Um construtor pode ser criado com a forma de um método. Ex: Classe(*dados_opcionais*) { }
// E também pode ser criado em uma mesma linha, digamos, na forma "inline". Ex: Classe(this.a, this.b, ...);
// Veja em: https://www.freecodecamp.org/news/constructors-in-dart/

void main() {
  final String username = "Marcelosmbr";
  final String password = "123123";
  final String sex = "Masculino";
  var access = false;

  List userData = [username, password, sex];

  // Se o acesso for false, é um usuário comum
  // Para usuários comuns, é usado o construtor padrão

  // Se o acesso for true, é um usuário admin
  // Para usuários admin, é usado o construtor nomeado como "admin"

  if (!access) {
    Usuario obj = new Usuario(userData);
    obj.personInfo();
  } else {
    Usuario obj = new Usuario.admin(userData);
    obj.personInfo();
  }
}

class Usuario {
  late String username;
  late String password;
  late String sex;
  late String access;

  // Construtor padrão
  Usuario(List data) {
    this.username = data[0];
    this.password = data[1];
    this.sex = data[2];
    this.access = "User"; // Valor padrão
  }

  // Construtor nomeado
  Usuario.admin(List data) {
    this.username = data[0];
    this.password = data[1];
    this.sex = data[2];
    this.access = "Admin"; // Valor padrão
  }

  void personInfo() {
    print("Dados da pessoa cadastrada.....");
    print("Username: ${this.username} || Password: ${this.password} || Sex: ${this.sex}");
    print("O nível de acesso da pessoa é: ${this.access}");
  }
}
