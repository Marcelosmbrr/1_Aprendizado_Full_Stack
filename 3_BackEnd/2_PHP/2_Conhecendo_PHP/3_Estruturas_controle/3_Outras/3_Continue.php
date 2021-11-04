<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/control-structures.continue.php
    
    //Continue é utilizado em estruturas de laço para pular o resto da iteração atual, e continuar a execução na validação da condição e, então, iniciar a próxima iteração

    for ($i = 0; $i < 5; ++$i) {

        if ($i == 2){
            continue; //Pular para a próxima iteração //O valor 2 não será impresso
        }

        echo "$i\n"; 
    }