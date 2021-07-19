//ESTRUTURA CONDICIONAL IF ELSE

//COM CHAVES
personagem = {
    nome: "Fulano",
    sexo: "Masculino",
    idade: 26,
    mensagem: function(op){

        if(op == true){

            return "Olá mundo";

        }else{

            return ".....";
        }

    }
}

console.log("O nome do personagem é " + personagem.nome + " e o seu sexo é " + personagem.sexo);
console.log("O personagem diz: " + personagem.mensagem(true));

//SEM CHAVES //SE FOR UMA ÚNICA SENTENÇA

arrData = ["A", "B", "C"];
if(arrData.length > 2)
    console.log("É maior do que dois");