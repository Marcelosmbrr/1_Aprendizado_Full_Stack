<?php

    $dt = new DateTime();
    
    $periodo = new DateInterval("P15D"); //Isto significa: novo intervalo de tempo, de ("15 dias")
    $dt->add($periodo); //Somamos 15 dias ao dia atual
    
    echo $dt->format("d/mm/Y H:i:s"); //Funciona igual a função DateTime comum
    

