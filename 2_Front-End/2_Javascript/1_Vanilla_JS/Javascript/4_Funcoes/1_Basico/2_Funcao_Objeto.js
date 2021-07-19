//FUNÇÃO COMO ATRIBUTO DE UM OBJETO
//Uma função como atributo é um método do objeto

objeto = {

    valorA: 100,
    valorB: 200,
    soma: function(){

        console.log(this.valorA + this.valorB);
    }
}

objeto.soma();