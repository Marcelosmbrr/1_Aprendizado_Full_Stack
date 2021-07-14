<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/book.json.php
    //https://www.json.org/json-en.html

    //JSON (JavaScript Object Notation) é uma estrutura de dados que permite a comunicação entre diferentes sistemas
    //É um padrão de troca de dados simples e rápida entre sistemas

    $arrData = array(

        "Nome"=>"Fulano de Souza",
        "Idade"=>23, 
        "Sexo"=>"Masculino"

    );

    //Conversão do array para JSON para envio dos dados a um outro sistema, por exemplo
    echo json_encode($arrData);

    //Conversão do JSON para um array associativo, true
    //Se não for setado o true, será convertido para um objeto
    $data = json_decode($arrData, true);

    print_r($data);