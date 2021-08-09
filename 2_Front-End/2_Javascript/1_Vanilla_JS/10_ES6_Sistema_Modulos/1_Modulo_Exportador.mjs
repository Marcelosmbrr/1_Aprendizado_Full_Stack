//MÓDULO QUE EXPORTA DADOS ****************************************************************************************/
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Guide/Modules
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Statements/export
//https://www.youtube.com/watch?v=XMl5qvD7EzQ&list=PLKvsMn7xWutZ64gPRZ5rTNB2HEZiN1nK8&index=26

//Com Export é possível disponibilizar funções, estruturas de dados como objetos e arrays e valores primitivos em outros módulos
//Ou seja, o módulo que exporta não o faz para um outro em específico, apenas disponibiliza para importação
//A exportação pode ocorrer em qualquer local do código

//PRIMEIRA FORMA DE EXPORTAÇÃO: INDIVIDUALMENTE****************************************************************************************************//
//Neste caso o recurso é definido individualmente como um exportado com "Export"

export const objetoExportado = {

    mensagem: "Este objeto foi exportado individualmente",
    metodo: () => { console.log("Disponível fora do escopo do módulo de origem") }

}

export function funcaoExportada(){
    
    return Math.random();

}

export default function funcaoExportadaDefault(){

    console.log("A exportação default permite que a importação do recurso possa ser realizada com um nome diferente do seu original");

}

//SEGUNDA FORMA DE EXPORTAÇÃO: EXPORTAÇÃO GRUPAL **************************************************************************************************//
//Neste caso, vários recursos são exportados de uma só vez, e mesmo que não tenham sido declarados com "Export"

function imprimeArgumento(arg){
    console.log("O valor do argumento é: " + arg);
}

let arr = [1,2,3,4,5];

export { imprimeArgumento, arr as arrayExportado};

//UTILIZAÇÃO DE ALIAS PARA AS EXPORTAÇÕES *******************************************************************************************/

function Batman(){
    console.log("Sou o Batman");
}

export {Batman as FunctionBat}

