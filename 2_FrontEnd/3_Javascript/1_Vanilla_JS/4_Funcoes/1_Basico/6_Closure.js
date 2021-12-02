//SOBRE CLOSURE**************************************************************/
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Closures
//https://medium.com/@prashantramnyc/javascript-closures-simplified-d0d23fa06ba4
//https://medium.com/@stephanowallace/javascript-mas-afinal-o-que-s%C3%A3o-closures-4d67863ca9fc

//Closure é a forma de fazer com que as variáveis dentro de uma função sejam privadas e persistentes

function pai(){

  let x = 1;

  function filho(){

    console.log(x);
    x++;

  }

  //Retorna a função filho()
  return filho;

}

// Contador_A recebe a função filho(), no estado pós primeira execução
// Assim, a função filho() é chamada se chamada a função contador_A()
// A cada chamada o valor de X é o da chamada anterior
var contador_A = pai();
contador_A();    // 1
contador_A();    // 2
contador_A();    // 3
contador_A();    // 4

// Recebe a função filho resetada
var contador_B = pai();
contador_B(); // 1
contador_B(); // 2

//Agora, veja o valor do contador_A //Continua considerado seus estados anteriores persistidos
contador_A(); // 5

//CONCLUSÃO**********************************************************/
//As variáveis contador_A e o contador_B são closures

