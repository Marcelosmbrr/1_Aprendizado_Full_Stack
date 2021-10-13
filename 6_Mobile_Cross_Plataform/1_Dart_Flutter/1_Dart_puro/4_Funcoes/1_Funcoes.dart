// ==== FUNÇÕES NO DART ==== //

List armazenamentoPorTipo(List array){

  var arrayInteiros = [];
  var arrayStrings = [];
  var arrayBooleanos = [];

  for(var cont = 0; cont < array.length; cont++){

    if(array[cont].runtimeType == int){

      arrayInteiros.add(array[cont]);

    }else if(array[cont].runtimeType == String){

      arrayStrings.add(array[cont]);

    }else if(array[cont].runtimeType == bool){

      arrayBooleanos.add(array[cont]);

    }

  }

  var arrayTodos = ["INTEIROS: ", ...arrayInteiros, "||STRINGS:", ...arrayStrings, "||BOOLEANOS:", ...arrayBooleanos];

  return arrayTodos;

}

// ==== Retorna o array de valores ==== //
List inputValores(){

  var array = ["A", "B", 10, 20, 60, true, 780, false, 78];

  return array;
  
}

void main(){

  final valoresDigitados = inputValores();

  final listaValores = armazenamentoPorTipo(valoresDigitados);

  print(listaValores);

}