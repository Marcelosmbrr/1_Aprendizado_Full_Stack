function carregar(){

    //DEFAULT
    document.body.style.backgroundColor = "#333";

    //HEADER
    header = document.createElement("header");
    document.body.appendChild(header);
    header.style.display = "flex";
    header.style.flexDirection = "row";
    header.style.justifyContent = "space-around";
    header.style.alignItems = "center";
    header.style.width = "100%";
    header.style.height = "150px";
    header.style.backgroundColor = "whitesmoke";

    //IMG PARA O LOGO
    imagem_logo = document.createElement("img");
    imagem_logo.src = "img/logo.png";
    imagem_logo.style.display = "block";
    imagem_logo.style.width = "150px";
    imagem_logo.style.height = "100%";
    imagem_logo.style.borderRadius = "0px 30px 30px 0px"

    //CONTEÚDOS DO HEADER
    //DIV PARA O LOGO
    header_div_logo = document.createElement("div");
    header.appendChild(header_div_logo);
    header_div_logo.style.width = "180px";
    header_div_logo.style.height = "130px";
    header_div_logo.style.backgroundColor = "#333";
    header_div_logo.style.borderRadius = "0px 30px 30px 0px"
    header_div_logo.appendChild(imagem_logo);

    //CONTEÚDOS DO HEADER
    //TAG NAV PARA O MENU
    header_nav = document.createElement("nav");
    header.appendChild(header_nav);
    header_nav.style.height = "20vh";
    header_nav.style.display = "flex";
    header_nav.style.justifyContent = "center";
    header_nav.style.alignItems = "center";
    header_nav.style.padding = "10px"
    header_nav.style.backgroundColor = "#333";
    header_nav.style.border = "2px solid whitesmoke";
    header_nav.style.borderRadius = "0px 0px 36px 36px";

    //MENU PARA A TAG NAV
    ul = document.createElement("ul");
    header_nav.appendChild(ul);
    ul.style.width = "100%";
    ul.style.height = "20%"
    ul.style.display = "flex";
    ul.style.justifyContent = "center";
    ul.style.alignItems = "center";
    
    list_items = ["Opcao1", "Opcao2", "Opcao3"];
    //Foreach para criar os list items
    list_items.forEach(function(opcao){ //array.forEach(function(currentValue) { }) //https://www.w3schools.com/jsref/jsref_foreach.asp
        let li = document.createElement('li');
        ul.appendChild(li);
        li.innerHTML += opcao;

        li.style.display = "block";
        li.style.width = "100%";
        li.style.textAlign = "center";
        li.style.padding = "15px";
        li.style.fontFamily = "verdana";
        li.style.fontWeight = "bolder";
        li.style.backgroundColor = "#F0DA50";
        li.style.cursor = "pointer";

        if(opcao == "Opcao1"){
            li.style.borderRadius = "30px 0px 0px 30px";
        } else if(opcao == "Opcao3"){
            li.style.borderRadius = "0px 30px 30px 0px";
        }

    });

}

//MEDIA QUERIE
//Problema conhecido: No primeiro carregamento, o código não será executado
function viewport_change(){
    media_querie();
    function media_querie(){
        console.log("Window Resize ativado");
        largura =  window.innerWidth;
            if(largura <= 600){
                console.log("Breakpoint");
                console.log(ul); //teste
                ul.style.display = "none";
                header_nav.style.cursor = "pointer";
                
                
            } else {
                ul.style.display = "flex";
                header_nav.style.cursor = "pointer";
            }
    }

    
    
}