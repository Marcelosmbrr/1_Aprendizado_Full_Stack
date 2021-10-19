// ==== DART DATETIME ==== //

/*

- DateTime é uma classe que serve para definir segundos, horas, dias e anos

*/

void main() {

  print(horaAtual());

}

String horaAtual() {

  DateTime tempo = DateTime.now();

  String hora = "Ano: ${tempo.year} | Dia: ${tempo.day} | Mês: ${tempo.month} | hora atual(h:m:s:ms): ${tempo.hour}:${tempo.minute}:${tempo.second}:${tempo.microsecond}";

  return hora;

}
