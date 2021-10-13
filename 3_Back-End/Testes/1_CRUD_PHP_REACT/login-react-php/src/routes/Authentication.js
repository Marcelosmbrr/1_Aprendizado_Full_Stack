//APLICAR TOKEN DE SEGURANÇA

export function Authentication(){

    const jwtToken = localStorage.getItem('user-token');

    if(jwtToken != null){

        return true;

    }else{

        return false;
    }

    

}