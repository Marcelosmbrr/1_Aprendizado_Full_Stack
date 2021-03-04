<?php

    //ARRAY UNIDIMENSIONAL
    $array_uni = array("A", "B", "C");

    var_dump($array_uni); //Mais informações
    print_r($array_uni); //Menos informações, mais legível

    //ARRAY BIDIMENSIONAL
    $array_bi[0][0] = "A";
    $array_bi[0][1] = "B";
    $array_bi[0][2] = "C";
    $array_bi[0][3] = "D";

    $array_bi[1][0] = "E";
    $array_bi[1][1] = "F";
    $array_bi[1][2] = "G";
    $array_bi[1][3] = "H";

    print_r($array_bi);

    //ARRAY COM CHAVE-VALOR DEFINIDOS
    $sujeitos = array();

    array_push($sujeitos, array(

        "nome"=>"Fulano",
        "idade"=>20,
        "sexo"=>"Masculino"

    ));

    array_push($sujeitos, array(

        "nome"=>"Ciclana",
        "idade"=>45,
        "sexo"=>"Feminino"

    ));

    print_r($sujeitos);

    //Variáveis pre-definidas, quando são arrays, são manipuladas desta forma, por meio de suas CHAVES
    //Campos de bancos de dados também são manipulados desta forma, quando inseridos como arrays em variáveis, com fetch() ou fetch_all()

    //Neste caso, sendo o índice 0, e a chave "nome", o valor é "Fulano"
    echo $sujeitos[0]["nome"];

    


















?>