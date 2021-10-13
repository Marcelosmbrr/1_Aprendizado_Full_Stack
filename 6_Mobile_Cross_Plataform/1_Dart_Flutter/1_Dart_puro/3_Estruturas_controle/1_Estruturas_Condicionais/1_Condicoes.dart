// ==== ESTRUTURAS CONDICIONAIS: IF, ELSE, SWITCH, TERNÁRIO ==== //

void main(){

  int valorA = 5;
  int valorB = valorA > 1 ? 10 : 5;

  if(valorB > valorA){

    print("O valor B é maior do que o valor A");

  }

  bool value = true;

  switch(value){

    case true:
      print("O booleano é verdadeiro");
    break;

    case false:
      print("O booleano é falso");
    break;

    default:
      print("Não é verdadeiro nem falso.");
    break;

  }

}




