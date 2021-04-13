<?php

    if(isset($_COOKIE["Empresa"])){

        echo "O cookie foi criado e seu valor é:<br>";
        $array = json_decode($_COOKIE["Empresa"]);
        print_r($array);

        echo "<br>";

        foreach($array as $key => $valor){

            echo "Chave: {$key}, Valor: {$valor}";
        }

    }

?>