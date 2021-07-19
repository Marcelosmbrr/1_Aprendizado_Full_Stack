//ESTRUTURA REPETIÇÃO DO WHILE

contador = 0;

do{

    imprimeContador(contador);
    contador++;

} while(contador != 11);

function imprimeContador(contador){
    
    console.log(`Contagem atual: ${Number(contador)}`);

}