function carregar(){
    var titulo = window.document.getElementById('titulo');
    var msg = window.document.getElementById('mensagem');
    var img = window.document.getElementById('img');
    var data = new Date(); //https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Date
    var hora = data.getHours(); 
    msg.innerHTML = `Agora são ${hora} horas.`;

    if(hora >= 5 && hora <= 12){
        titulo.innerHTML = 'Bom dia!';
        img.src = 'img/manha.jpg';
    }

    else if(hora > 12 && hora <= 17){
        titulo.innerHTML = 'Boa tarde!';
        img.src = 'img/tarde.jpg';
    }

    else if(hora >= 18 && hora <= 24){
        titulo.innerHTML = 'Boa noite!';
        img.src = 'img/noite.jpg';
    }

    else if(hora >= 24 && hora < 5){
        titulo.innerHTML = 'Boa noite!';
        img.src = 'img/noite.jpg';
    }

    

}
