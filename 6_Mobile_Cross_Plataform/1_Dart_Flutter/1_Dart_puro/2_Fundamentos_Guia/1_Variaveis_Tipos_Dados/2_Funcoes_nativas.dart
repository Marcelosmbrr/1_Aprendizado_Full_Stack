/*

- Assim como no Javascript, podemos dizer que "tudo é objeto"
- No Dart os valores também se tornam objetos temporariamente, para acessar métodos de classes globais
- Então as funções nativas são, na verdade, métodos de classes, e seus nomes são, no geral, idênticos aos dos métodos do Javascript

*/

main(){

  String nome = "Fulano de Beltrano Ciclano";
  print("O nome, sem espaços, tem ${nome.replaceAll(' ', '').length} caracteres");

  String nomes = "Marcelo|Gabriel|Fulano|Fernanda";
  print("Os nomes, um a um, em um array, são: ${nomes.split('|')}");
  
  double number = 21.3;
  print("O número arredondado é igual a ${number.floor()}");

}