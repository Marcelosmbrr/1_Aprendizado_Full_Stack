<?php

    //Existem diversas funções para leitura de diferentes tipos de arquivos, e em diferentes situações
    //Mais sobre sistemas de arquivos: https://www.php.net/manual/pt_BR/ref.filesystem.php

    $filename = "2_Arquivos\log3.txt";

    if(file_exists($filename)){

        $file = fopen($filename, "r");

        //A função feof procura pelo fim do arquivo, e retorna true quando o encontra
        while(!feof($file)){

            $linha = fgets($file);

            echo $linha;

        }

        
    }

    fclose($file);




?>