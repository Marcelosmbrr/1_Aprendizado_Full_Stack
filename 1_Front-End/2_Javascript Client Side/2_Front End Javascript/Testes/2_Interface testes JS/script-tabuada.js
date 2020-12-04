function listar_tabuada(){

    let valor = window.document.querySelector("input#tabuada");
    let multiplicador = Number(valor.value);
    let lista = document.querySelector("select#lista");
    if(multiplicador != undefined && multiplicador != null && multiplicador > 0){
        console.log('Tabuada escolhida: ' + multiplicador);
    
        let contador = 0;

        while(contador <= 10){
            let item = document.createElement("option");
            item.text = `${contador} X ${multiplicador} = ${contador * multiplicador}`;
            lista.appendChild(item);
            contador++;

        }


       

        
    }
    else if(multiplicador || undefined || multiplicador != null || multiplicador > 0){
        window.alert("Digite um número válido");
    }
    

    



}
