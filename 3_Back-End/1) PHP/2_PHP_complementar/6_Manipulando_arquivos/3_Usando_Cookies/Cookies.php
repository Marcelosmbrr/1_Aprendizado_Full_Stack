<?php

    $user_dados = array(

        "1" => "Fulano_no",
        "2" => "fulano@gmail.com",
        "3" => "produto_X123"

    );

    //setcookie("nome_cookie", "valor_cookie", "tempo_vida");
    setcookie("username", $user_dados["1"] , time()+3600);
    setcookie("user_email", $user_dados["2"] , time()+3600);
    setcookie("ultima_pesquisa", $user_dados["3"], time()+3600);

    foreach($_COOKIE as $campo => $valor){

        echo "{$campo}: {$valor}";
        echo "<br>";
    }

    











?>