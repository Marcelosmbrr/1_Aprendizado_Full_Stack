//UTILIZAR FUNÇÃO FACTORY E O MÉTODO OBJECT.CREATE() PARA CRIAR OBJETOS
//https://developer.mozilla.org/pt-BR/docs/orphaned/Web/JavaScript/Reference/Global_Objects/Object/create

//A função factory irá retornar um objeto criado com o método .create() do Objeto global "Object"
//Síntaxe: Object.create(prototype, object{}), sendo object{} um objeto definido e configurado (enumerable, writable, etc)

function criaPessoa(nome, sexo){

    //Definição do Prototype
    const pessoaPrototype = {

        falar: function() { console.log(`${this.nome} está falando`) },
        comer: function() { console.log(`${this.nome} está comendo`) },
        beber: function() { console.log(`${this.nome} está bebendo`) },
        falarSexo: function() { console.log(`${this.nome} diz que é do sexo ${this.sexo}`) }

    }

    //Retorna o retorno do método Object.create()
    return Object.create(pessoaPrototype, {

        nome:{
            enumerable: true, 
            value: nome, 
            writable: true,
        },
        sexo:{
            enumerable: true, 
            value: sexo, 
            writable: true,
        }
    })
}

const pessoaA = new criaPessoa("Fulano", "Masculino");
pessoaA.falar();
pessoaA.falarSexo();

const pessoaB = new criaPessoa("Beltrana", "Feminino");
pessoaB.falar();
pessoaB.falarSexo();
