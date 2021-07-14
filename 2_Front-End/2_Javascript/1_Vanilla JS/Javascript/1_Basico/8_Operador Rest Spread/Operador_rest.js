//o Rest é utilizado para permitir que uma função receba um número indefinido de parâmetros
//Rest significa "resto", o que faz todo sentido considerando sua finalidade
//Um operador Rest necessariaemente é antecedido por três pontos ...

function showList(nome, ...clientes){

    console.log("Nome da empresa é:" + nome);
    console.log(clientes); //Irá imprimir um array com os nomes
}


showList("Fulano e Cia", "João", "Pedro", "Carlos", "Smith");
