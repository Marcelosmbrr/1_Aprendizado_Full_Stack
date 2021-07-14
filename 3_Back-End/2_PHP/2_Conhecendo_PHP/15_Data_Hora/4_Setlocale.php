<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/function.setlocale.php

    //Define informações locais, como hora, fuso horário, linguagem das impressões, entre outras coisas

    setlocale(LC_ALL, "pt-BR", "pt-BR.utf-8", "portuguese");

    //Formata uma hora/data de acordo com as configurações locais
    //https://www.php.net/manual/pt_BR/function.strftime.php
    echo strftime("%A %B");



