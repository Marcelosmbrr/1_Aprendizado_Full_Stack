/*

- Parâmetros são posicionados quando possuem colchetes [ ]
- Admitem valores Default

- Parâmetros são nomeados quando possuem chaves { }
- Podem ser enviados fora de ordem, e necessariamente na forma de chave: valor
- Admitem valores Default

*/

void parametrosPosicionados(String nome, [int idade = 18, double peso = 50.00]) {
  print("O nome da pessoa é ${nome}, sua idade é ${idade} e seu peso é ${peso}");
}

void parametrosNomeados(String nome, {int idade = 18, double peso = 50.00}) {
  print("O nome da pessoa é ${nome}, sua idade é ${idade} e seu peso é ${peso}");
}

void main() {
  parametrosPosicionados("Fulano da Silva"); // Chamada da Função com parâmetros posicionados
  parametrosNomeados("Beltrano Ciclano", peso: 65.20, idade: 42); // Chamada da Função com parâmetros nomeados
}
