// ==== EXCEPTIONS NO DART ===== //

/*

- A estrutura do tratamento de exceções no Dart é como em outras linguagens
- Try: Testa uma lógica.
- Catch: Captura erros na lógica.
- On: Tratamento de erros especificos, e que possuem termos reservados.
- Throw Exception: Exceção criada e tratata pelo catch.
- Finally: Executado ao final do Try/Catch, tendo ou não uma exception.

*/

void main() {
  List valores = [10, 20, 0];

  division(valores);
}

void division(List valores) {
  try {
    if (valores[2] == 0) {
      throw Exception("Divisão por zero não é permitido!");
    } else if (valores[2] < 0) {
      throw Exception("Divisão por número negativo não é permitido!");
    }

    double operation = valores[0] + valores[1] / valores[2];

    print("O resultado da operação de divisão é: ${operation}");
  } catch (error) {
    print(error);
  } finally {
    print("Finalização do Try Catch");
  }
}
