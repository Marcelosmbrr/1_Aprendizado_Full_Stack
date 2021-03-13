<?php

    require_once("Class_Usuario.php");

    //Pesquisa select de um só usuário
    $user = new Usuario;
    $user->loadByid(1);
    echo $user; //Esse echo ativa o método __toString








?>