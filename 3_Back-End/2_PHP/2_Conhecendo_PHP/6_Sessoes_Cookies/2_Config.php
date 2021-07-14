<?php

    //Uma prática comum é, em um sistema, criar um arquivo que oferte recursos que serão utilizados em todos ou vários arquivos
    //Por exemplo, o session_start(), ao invés de incluído em todos os sites que usarão sessões, pode ser escrito neste arquivo em meio a diversas outras configurações

    session_start();

    //Este é um exemplo simples, mas seria possível verificar se a sessão existe com estruturas condicionais
    //Além disso, neste mesmo arquivo, como dito, poderiam ter muitas outras configurações além das referentes a sessões

?>