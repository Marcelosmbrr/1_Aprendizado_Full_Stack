void main(){

  var contadorA = 1;

  print("=============== WHILE ===============");
  while(contadorA <= 5){

    print("Valor do contador: ${contadorA}");
    contadorA = contadorA + 1;

  }

  var contadorB = 10;

  print("=============== DO WHILE ===============");
  do{

    print("Valor do contador: ${contadorB}");
    contadorB = contadorB + 3;

  }while(contadorB <= 20);

}