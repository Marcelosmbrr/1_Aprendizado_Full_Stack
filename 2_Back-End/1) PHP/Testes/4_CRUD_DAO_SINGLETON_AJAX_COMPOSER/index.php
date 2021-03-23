<?php

    require_once("vendor/autoload.php");

    use Classes\Pessoa_DAO;

    $teste = new Pessoa_DAO;

    $teste->loadbyID(1);

    echo $teste;

    


    
    
    
    

   







?>