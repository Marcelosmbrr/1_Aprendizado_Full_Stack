// ==== TIPO DYNAMIC ==== //

/*

- Se uma variável é declarada como dinâmica, seu tipo é reconhecido dinâmicamente, como o tipo var
- A diferença é que no caso do dynamic, o tipo aferido pode mudar ao longo da execução
- Ou seja, o tipo var é dinâmico na inicialização, mas fixo depois que ela ocorre


*/

void main() {
  var a = 123;
  dynamic b = 456;

  print("A variável do tipo var foi inicializada com um valor do tipo {${a.runtimeType}}, e nesse deve se manter.");
  print("A variável do tipo dynamic foi inicializada com um valor do tipo {${b.runtimeType}}, e pode muda-lo.");

  b = "ABC";

  print("A variável do tipo dynamic agora recebeu um valor do tipo {${b.runtimeType}}.");
}
