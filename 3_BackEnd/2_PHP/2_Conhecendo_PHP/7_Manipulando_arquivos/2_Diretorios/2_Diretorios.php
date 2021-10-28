<?php

    //Função escaneia um diretório e retorna um array
    $scpasta = scandir("mkdir_result");

    $data = array();

    //Imprimir o Array
    //Os valores que são pontos são o percorrer dos níveis do diretório
    var_dump($scan_pasta);

    echo "<br>";

    //Percorrer o array $scan_pasta recuperando seus valores com a variável $file
    //Ou seja, $file irá receber o nome do arquivo existente dentro da pasta mkdir_result
    foreach($scpasta as $file){

        //A função in_array verifica valores do array especificados //in_array (array(local de procura), valor procurado)
        if(!in_array($scpasta, array(".", ".."))){

            //Nome do arquivo é 'nome da pasta' + 'barra' + 'nome do arquivo'
            //Usamos DIRECTORY SEPARATOR porque a barra não é a mesma para cada sistema operacional
            //Portanto $filename recebe o caminho e nome do arquivo
            $filename = "mkdir_result" . DIRECTORY_SEPARATOR . $file;

            //pathinfo() retorna um array associativo contendo informações diversas sobre o arquivo do caminho em questão
            $info = pathinfo($filename);

            //Informação sobre o tamanho do arquivo, em bytes
            $info["size"] = filesize($filename);

            //Informação sobre a data e hora de modificação do arquivo em questão
            $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));

            array_push($data, $info);

        }
    }

    echo json_encode($data);






?>