//Uma função callback é uma função passada a outra função como argumento, que é então invocado dentro da função externa para completar algum tipo de rotina ou ação
 
//Ela é tipicamente passada como argumento de outra função e/ou chamada quando um evento for acontecido, ou quando uma parte de código receber uma resposta de que estava à espera
//Ela é chamada de forma assíncrona, isto é, não necessariamente após o término de um fluxo linear de tarefas
//Podem estar ocorrendo x tarefas, em diversos setores da aplicação, e ela estar programada para ser chamada durante ou após o termino de uma delas

//O objetivo do recurso é não bloquear a execução do código enquanto outra atividade é executada

//https://blog.betrybe.com/tecnologia/callback/#:~:text=Basicamente%2C%20callback%20%C3%A9%20um%20tipo,%2C%20ent%C3%A3o%2C%20chamada%20de%20callback.


//Exemplo com Foreach
fabricantes = ["Audi", "Mercedes", "BMW"];

function callback(nome, indice){
    console.log(`${indice}. ${nome}`);
}
//Callback será chamada de volta ("call back") a cada evento, isto é, a cada loop no array
fabricantes.forEach(callback);