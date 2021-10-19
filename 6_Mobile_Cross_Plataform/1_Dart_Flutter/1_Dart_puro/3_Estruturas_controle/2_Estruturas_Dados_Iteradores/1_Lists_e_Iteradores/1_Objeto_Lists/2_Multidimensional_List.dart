// ==== LISTA MULTIDIMENSIONAL === //

/*

- Uma lista muldimensional é uma Lista de Listas
- Pode ser criada de forma literal, ou com o método "Generate"
- O método Generate será mostrado no próximo arquivo (3_Generate_List)

*/

void main() {

  // Forma literal - lista de listas
  List<List> listaMulti = [
    [10, 20],
    [30, 44],
    [50, 60],
    [102.12, 35.8]
  ];

  listaMulti.forEach((indexList) {

    indexList.forEach((number) {

      print("Elemento: ${number}");

    });

  });

}
