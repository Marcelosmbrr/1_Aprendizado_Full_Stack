//ESTRUTURA REPETIÇÃO WHILE
//Útil quando não existe um número de iterações bem definido, mas uma referência de valor

contador = 1;
while(contador != 11){

    imprimeContador(contador);
    contador++;
    
}

function imprimeContador(contador){
    
    console.log(`Contagem atual: ${Number(contador)}`);

}



