<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/function.header.php
    //https://www.google.com/search?q=php+headr&oq=php+headr&aqs=chrome..69i57j69i64.1727j0j1&sourceid=chrome&ie=UTF-8

        //a função header serve para editar o cabeçalho de uma resposta HTTP
        //Nada pode ser impresso antes de um header ter sido definido


        header('Location: http://www.example.com/');

        header('Content-Type: application/pdf');

