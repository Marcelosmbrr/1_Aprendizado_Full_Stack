//MODIFICANDO PROTOTYPES
//https://developer.mozilla.org/pt-BR/docs/Learn/JavaScript/Objects/Object_prototypes

// ADIÇÃO DE RECURSOS AOS OBJETOS************/
function Produto(nome, preco){

    this.nome = nome
    this.preco = preco

}

Produto.prototype.desconto = function(percentual){ //Recurso adicionado ao Prototype

    this.preco = this.preco - (this.preco * percentual);

}

Produto.prototype.aumento = function(percentual){ //Recurso adicionado ao Prototype

    this.preco = this.preco + (this.preco * percentual);
    
}

produtoA = new Produto("Camiseta", 20.00);
console.log(`ProdutoA = ${produtoA.nome} e seu preço é ${produtoA.preco}`);
produtoA.aumento(0.50);
console.log(`O preço do protudoA com aumento de 50% é de ${produtoA.preco}`);

produtoB = new Produto("Jaqueta", 100.00);
console.log(`ProdutoB = ${produtoB.nome} e seu preço é ${produtoB.preco}`);
produtoB.aumento(0.50);
console.log(`O preço do protudoB com aumento de 50% é de ${produtoB.preco}`);

