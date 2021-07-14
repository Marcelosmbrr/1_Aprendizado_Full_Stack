<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/refs.calendar.php

    //Em termos genéricos, TimeStamp é uma marca temporal
    //No ambiente PHP, e em outros, o TimeStamp é a quantidade de segundos passada entre o momento presente e o dia 1 de janeiro de 1970, horário 00:00:00
    //Esta data é o inicio da A Era UNIX ou Unix epoch, sendo o marco zero do sistema de calendário usado pelo sistema operacional UNIX

    //No PHP existem algumas funções envolvendo o TimeStamp
    //A função abaixo será particularmente útil nos arquivos seguintes

    $date_tstamp = strtotime("2000-09-01"); //Imprime o TimeStamp de uma data