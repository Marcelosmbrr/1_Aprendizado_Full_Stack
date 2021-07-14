<?php

    $dirA = "folder_01";
    $dirB = "folder_02";
    $file = "arquivo.txt";

    //Se o diretório tal não existir, crie-o
    if(!is_dir($dirA)) 
        mkdir($dirA); 
    if(!is_dir($dirA)) 
        mkdir($dirB);

    //Se o arquivo "folder_01/arquivo.txt" não existir
    if(!file_exists($dirA . DIRECTORY_SEPARATOR . $file))
        $file = fopen($dirA . DIRECTORY_SEPARATOR . $file, "w+"); //É criado no modo w+, ou seja, permite leitura e escrita
        fwrite($file, date("Y-m-d H:i:s")); //fwrite() escreve o conteúdo no arquivo
        fclose($file); //Fecha o arquivo


    //Até aqui as pastas foram criadas, e também o arquivo, que foi armazenado na primeira pasta
    //Para mover o arquivo da primeira para a segunda pasta, basta utilizar a FUNÇÃO RENAME()

    //rename(origem, destino)
    //O que ocorre é: rename(folder_01/arquivo.txt, folder_02/arquivo.txt)
    rename($dirA . DIRECTORY_SEPARATOR . $file, $dirB . DIRECTORY_SEPARATOR . $file); 
    