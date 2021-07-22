// DIFERENÇA ENTRE FUNÇÃO CONSTRUTURA E FACTORY********************/
//https://pt.stackoverflow.com/questions/454788/diferen%C3%A7a-entre-fun%C3%A7%C3%A3o-construtora-e-fun%C3%A7%C3%A3o-que-retorna-objeto-literal
//https://medium.com/@viniazvd/classes-vs-fun%C3%A7%C3%B5es-construtoras-vs-fun%C3%A7%C3%B5es-f%C3%A1brica-b92a6afa70a4#:~:text=Podemos%20resumir%20uma%20fun%C3%A7%C3%A3o%20f%C3%A1brica,construtor%2C%20%C3%A9%20uma%20fun%C3%A7%C3%A3o%20f%C3%A1brica.

// FUNÇÃO FACTORY CRIA E RETORNA UM OBJETO LITERAL!
// FUNÇÃO CONSTRUTORA CRIA UMA "CLASSE" CUJOS ATRIBUTOS E MÉTODOS SÓ PODEM SER ACESSADOS POR INSTÂNCIAS!

//FUNÇÃO FACTORY**********************************************/
function funcaoFactory(nome, sexo, cor){

    return {
        nome: nome,
        sexo: sexo,
        cor: cor
    }

}

//É chamada como uma função comum, e retorna o objeto literal fabricado
objeto_literal = funcaoFactory("Fulano", "Masculino", "Negro");
console.log(objeto_literal.nome); //Notação ponto

//FUNÇÃO CONSTRUTORA/CLASSE**********************************************/
function funcaoConstrutora(nome, sexo, cor){

    this.nome = nome;
    this.sexo = sexo;
    this.cor = cor;

    //Não tem retorno
}

//É chamada com o termo reservado "new"
objeto_instancia = new funcaoConstrutora("Fulano", "Masculino", "Negro");
console.log(objeto_instancia.nome); //Notação ponto