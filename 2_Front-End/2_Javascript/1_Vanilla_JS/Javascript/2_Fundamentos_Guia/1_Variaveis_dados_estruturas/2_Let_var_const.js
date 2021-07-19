//TIPOS DE VARIÁVEIS ****************************************************************/

//Variáveis declaradas podem ser do tipo Let, Var ou Const
//Se o tipo for omitido, serão do tipo var

//SOBRE VAR **************/

//Var possui escopo global, de função, mas não de bloco
//Significa que não se identifica dentro de um if, for, switch, enfim, mas, apenas ou no escopo global, ou em uma função - o que é um problema
var car = 'Land Rover';

if (car === 'Land Rover') {

    var car = 'Ferrari';

    console.log('Dentro do if: ' + car); //Irá imprimir "Ferrari"

}

console.log('Fora do if: ' + car); //Irá imprimir "Ferrari"

//Outro problema do tipo Var, é que duas variáveis podem ter o mesmo nome, e se sobreescrever
nome = "ok";
nome = "ooook";
console.log(nome) //Irá imprimir "ooook"

//SOBRE LET **************/

//Let possui escopo de bloco, global e de função, e foi implementado no ES6 para solucionar os problemas do Var
//Let permite que o código seja melhor planejado e compreendido no que diz respeito ao fluxo dos dados
let nome = 'Pedro';

if (nome === 'Land Rover') {

    let nome = 'João';

    console.log('Dentro do if: ' + nome); //Irá imprimir "João"

}

console.log('Fora do if: ' + nome); //Irá imprimir "Pedro"

//Além disso, let não permite a declaração dupla, e, portanto, a sobreescrita de valores
let cidade = "Pelotas";
let cidade = "Pelotas";
console.log(cidade); //Irá imprimir "Identifier 'cidade' has already been declared"

//SOBRE CONST **************/

//Declarar uma variável como const não significa necessariamente que seu valor não pode ser mudado
//Significa que não podemos sobrescrever o seu identificador - assim como ocorre com let
//O mais diferencial em relação ao let é que devemos obrigatoriamente definir um valor para ela quando a declararmos


//SOBRE HOISTING
//O Hoisting ocorre quando seu código Javascript é compilado : Basicamente, todas as declarações de variáveis são movidas para o topo de seu escopo local
//Hoisting não funciona com Let ou Const
console.log("O valor é " + a); //Irá imprimir Undefined
a = 2;
console.log("O valor é " + a) //Irá imprimir 2
