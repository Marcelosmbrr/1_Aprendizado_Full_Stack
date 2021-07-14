<?php

    //$var = referência
    function somar(&$endereco_valor){

        $endereco_valor += 200;

    }

    $valor = 0;

    somar($valor);
    somar($valor);

    echo $valor;











?>