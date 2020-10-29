<?php
    
    //Data usa o time stamp do UNIX como referência
    echo date("d/m/Y H:i:s"); //Data e hora, sendo H = hora, i = minutos, e s = segundos
    echo "<br>";
    echo time(); //time stampo do UNIX - segundos desde 1 de janeiro de 1970
    
    $ts = strtotime("2001-09-11"); //Recupera o time stamp de uma data //Poderia ser também "+1 day", "+1 week", etc
    echo "<br>";
    echo date("l, d/mm/Y", $ts); //l = dia da semana, e data do time stamp recuperado em $ts
