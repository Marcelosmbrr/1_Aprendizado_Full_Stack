<?php

    require_once("vendor/autoload.php");

    use Classes\Usuario;

    $user = new Usuario(1);
    if($user == false){

        echo "Teste";

    }else{

        //Chama o método mágico toString
        echo $user;

    }








?>