function carregar(){
    console.log('Script hora carregado');
    const fundo = window.document.querySelector("body");
    let data = new Date();
    let hora = data.getHours();
    const mensagem = window.document.querySelector("p#msg-hora");
    
    if(hora >= 5 && hora <= 12){
        fundo.style.background = "url('img-horas/morning-1500.jpg')";
        mensagem.innerHTML = `São ${hora}h, bom dia!`;
    }

    else if(hora > 12 && hora <= 17){
        fundo.style.background = "url('img-horas/evening-1500.jpg') no-repeat";
        mensagem.innerHTML = `São ${hora}h, bom dia!`;
        
    }

    else if(hora >= 18 && hora <= 24){
       fundo.style.backgroundImage = "url('img-horas/night-1500.jpg')";
       mensagem.innerHTML = `São ${hora}h, boa noite!`;

    }

    else if(hora < 5){
        fundo.style.backgroundImage = "url('img-horas/night-1500.jpg')";
        mensagem.innerHTML = `São ${hora}h, boa noite!`;
    }

}