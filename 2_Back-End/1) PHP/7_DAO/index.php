<?php

    require_once("vendor/autoload.php");

    use Classes\Usuario;

    $user = new Usuario();
    $user->loadbyID(1);
    if($user == false){

        echo "Teste";

    }else{

        //Chama o método mágico toString
        echo $user;

        echo "<br>";

        //Imprime o JSON enviado
        print_r(json_decode($user));

    }








?>