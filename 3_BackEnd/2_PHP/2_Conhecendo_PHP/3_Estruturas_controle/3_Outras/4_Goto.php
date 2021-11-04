<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/control-structures.goto.php

    //O operador goto pode ser usado para pular para outra seção do programa
    //O ponto de destino é definido por um rótulo seguido de dois pontos

    goto a;
    echo 'Foo';

    a:
    echo 'Bar';