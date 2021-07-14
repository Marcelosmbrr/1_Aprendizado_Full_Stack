<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/function.date.php
    
    //Formata a data e a hora local
    //Retorna uma string de acordo com a string de formato informada usando o inteiro timestamp informado, ou a hora atual local se nenhum timestamp for informado
    
    //É case Sensitive //Por exemplo, "Y" seria 2021, e "y" apenas 21
    //Os minutos são expressos com a letra "i" porque "m" já é utilizado para mês //O "i" seria a segunda letra da palavra minuto, ou minute
    //Os valores temporais são recuperados do servidor, e por isso variam a cada execução
    echo date("d/m/Y H:i:s");

    //Imprime a data, o valor de hora, minutos e segundos do TimeStamp 1626237409
    //Ou seja, neste caso o valor temporal será sempre o mesmo
    echo date("d/m/Y H:i:s", 1626237409);

    //É possível saber o dia da semana de um TimeStamp 
    $date_tstamp = strtotime("2000-09-01"); //Timestamp de uma data
    echo date("l, d/m/Y H:i:s", $date_tstamp); //Letra l recupera o dia da semana

    