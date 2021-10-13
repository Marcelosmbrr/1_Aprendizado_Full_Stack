// ==== TESTE DO ATRIBUTO PRIVATE ==== //

import '1_Get_Set_Privacidade.dart'; // Importação de arquivo

void main() {
  Person obj = new Person();

  print("Acessando atributos da classe definida no outro arquivo");

  // O atributo password não pode ser acessado a partir desse arquivo 
  // Isso ocorre porque esse atributo está configurado lá como privado
  
  //print("Username: ${obj.username}, Password: ${obj.password}, Sex: ${obj.sex}");
  
}
