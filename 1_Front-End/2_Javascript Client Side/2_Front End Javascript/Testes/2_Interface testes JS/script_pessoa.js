function analise_pessoa(){
    let ano_nasc = window.document.querySelector("input#ano_nascimento").value;
    console.log(ano_nasc);

        let objdata = new Date;
        let ano_atual = objdata.getFullYear();
        var idade = Number(ano_atual) - Number(ano_nasc);

        if(ano_nasc != null && ano_nasc != undefined && ano_nasc <= ano_atual && ano_nasc != NaN && idade <= 120 ){

            console.log(idade); //teste

            const sexo = window.document.getElementsByName("radsex");
            let genero = '';
            if(sexo[0].checked){
                genero = 'Masculino';
            }
            else{
                genero = "Feminino";
            }
            console.log(genero); //teste

            const imagem = window.document.querySelector("img#foto_pessoa");

            if(genero == 'Masculino' && idade <= 3){
                imagem.setAttribute('src', 'img-pessoas/foto-bebe-m.png');
            }
            else if(genero == 'Feminino' && idade <= 3){
                imagem.setAttribute('src', 'img-pessoas/foto-bebe-f.png');
            }
            //Outros ifs para as outras possibilidades
            //Feminino e Masculino, idade de criança, de adolescente, adulto e idoso
        }
        else if(ano_nasc == null || ano_nasc == undefined || ano_nasc > ano_atual || ano_nasc == NaN || idade > 120){
            window.alert('Digite um ano de nascimento válido');
        }
    
}
    