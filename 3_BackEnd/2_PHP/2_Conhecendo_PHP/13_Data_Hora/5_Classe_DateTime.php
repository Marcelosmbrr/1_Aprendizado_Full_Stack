<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/class.datetime.php
    //https://www.php.net/manual/pt_BR/class.dateinterval.php

    //Uma classe nativa do PHP que oferta diversos métodos para manipular dados temporais
    //É mais favorável utiliza-la, ao invés das funções nativas isoladas

    $dt = new DateTime();

    $periodo = new DateInterval("P15D");

    $dt->add($periodo);

    echo $dt->format("d/m/Y H:i:s"); //Igual à função date()
