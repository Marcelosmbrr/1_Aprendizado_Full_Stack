void main(){

  var arrayPares = [];

  // ================ FOR ================ //
  for(int cont = 0; cont < 20; cont++){

    if(cont % 2 == 0){

      arrayPares.add(cont);

    }

  }

  print("======== FOR - ARRAY DE PARES - ENTRE 0 E 20 ========");
  print(arrayPares);
  print("\n");

  // ================ FORIN ================ //
   print("======== FORIN - VALORES MAIORES QUE 10 NO ARRAY DE PARES ========");
  for(int value in arrayPares){

    if(value > 10){

      print("Valor encontrado: ${value}");

    }

  }

}