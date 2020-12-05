//Promises definem uma ação que vai ser executada no futuro, ou seja, ela pode ser resolvida (com sucesso) ou rejeitada (com erro)
//Toda a Promise retorna um método then e outro catch
//Utilizamos o then para tratar quando queremos resolver a Promise
//E o catch quando queremos tratar os erros de uma Promise rejeitada



//Para criarmos uma Promise é muito simples, basta inicializar um new Promise
//Recebe uma função como parâmetro, cujos parâmetros são (resolve, reject) => {}
var p1 = new Promise(function(resolve, reject) {

    //Então podemos realizar nossas tarefas assíncronas no corpo desta função
    //Quando queremos retornar o resultado final fazemos resolve(resultado)
    //E quando queremos retornar um erro fazemos reject(erro)
    //reject ("Error!");

    condicao = true;

    if(condicao){
        resolve("Success!");
    } else{
        reject("Erro!");
    }
    
  });

  //Then(Resolve, Reject)
  p1.then(function(resolved) { //Resolved = "Success!"
    console.log(resolved); 
  }, function(rejected) { //Reject = "Erro!"
    console.log(reject); 
});
//Se fosse necessário, poderíamos proseguir com outras tarefas, após esse then
//Tanto then quanto catch retornam outra Promise e é isso que permite que façamos o encadeamento de then.then.then
//.then(resolve, reject) { }
//.then(resolve, reject) { }
//......
