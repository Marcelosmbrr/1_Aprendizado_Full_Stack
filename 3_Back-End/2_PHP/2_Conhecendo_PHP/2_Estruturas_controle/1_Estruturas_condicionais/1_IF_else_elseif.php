<?php

    //Estrutura if com chaves
    $valorA = FALSE;

    if($valorA){ //Por padrão, if é um "se não for false"
        echo "É verdadeiro";
    }else{
        echo "É falso";
    }

    $valorB = 3;

    if($valorB == 1){
        echo "É igual a 1";
    }elseif($valorB == 2){
        echo "É igual a 2";
    }elseif($valorB == 3){
        echo "É igual a 3";
    }

    //Estrutura if sem chaves
    $valorC = null;

    if(!empty($valorC))
        echo "Não é vazio";
    else
        echo "É vazio";

    //Estrutura if com :
    $valorD = null;
    if(empty($valorC)):
        echo "É vazio";
    else:
        echo "Não é vazio";
    endif;

?>