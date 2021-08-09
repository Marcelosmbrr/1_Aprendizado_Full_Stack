//SOBRE CONCATENAR ARRAYS*************************/

//EXEMPLO 1 - COM MÉTODO CONCAT()
const num1 = [1, 2, 3, 4, 5];
const num2 = [6, 7, 8, 9, 10];
const concat1 = num1.concat(num2);

console.log(concat1);

//EXEMPLO 2 - COM MÉTODO CONCAT()
const num3 = [1, 2, 3, 4, 5];
const num4 = [6, 7, 8, 9, 10];
const concat2 = num3.concat(num4, [11, 12, 13, 14, 15]);

console.log(concat2);

//EXEMPLO 2 - COM MÉTODO SPREAD ...
const num5 = [1, 2, 3, 4, 5];
const num6 = [6, 7, 8, 9, 10];
const spread = [...num5, "QUALQUER COISA", ...num6];

console.log(spread);

