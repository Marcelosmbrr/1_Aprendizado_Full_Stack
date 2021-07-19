<?php

    //BÁSICO

    //passagem por valor
    function mensagem($msg){

        $letras = strlen($msg);

        return $letras;
    }

    $msg = "Fulaninho";
    $retorno = mensagem($msg);

    echo "A mensagem possui: ".$retorno." letras";

   

?>