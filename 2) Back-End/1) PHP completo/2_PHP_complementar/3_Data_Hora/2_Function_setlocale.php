<?php
    
    //setlocale define todo o sistema de acentuação, bem como de datas, horas, enfim, para um formato escolhido
    //Por padrão, o formato é o americano
    //Neste caso, o formato escolhido é o português
    setlocale(LC_ALL, "pt-BR", "pt-BR.utf-8", "portuguese");
    
    //A função date() serve apenas para exibir as coisas em inglês padrão.
    //Se quisermos usar outra língua para trabalharmos com data e tempo, precisamos da strftime(), que recupera as configurações do setlocale
    echo strftime("%A %B");

