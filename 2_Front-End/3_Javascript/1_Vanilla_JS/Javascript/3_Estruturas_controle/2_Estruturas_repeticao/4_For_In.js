//REPETIÇÃO FOR IN
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Statements/for...in

//O laço for...in interage sobre propriedades enumeradas de um objeto, na ordem original de inserção
//Em um array entende-se as propriedades como seus índices
//OU SEJA: com For In se percorre pelos índices da estrutura de dados, independente de quais forem
//A síntaxe é for(índice in array)

//EXEMPLO COM ARRAY
let nomes = Array();
nomes['a'] = 'João';
nomes[2] = 'Rodrigo';
nomes['Mario'] = 'Bross';
nomes[false] = 'Falsiane';

for(var index in nomes){
    console.log('No índice ' + index + ' do vetor nomes, há o nome ' + nomes[index]);
}

//EXEMPLO COM OBJETO
objeto = {

    nome: "Fulano",
    sexo: "Masculino",
    idade: 22

}

for(var atributo in objeto){
    console.log('No atributo ' + atributo + ' do objeto de nome "objeto", há o valor ' + objeto[atributo]);
}

