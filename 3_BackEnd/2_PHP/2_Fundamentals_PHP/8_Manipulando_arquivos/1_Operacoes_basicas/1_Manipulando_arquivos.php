<?php

    //A função fopen() abre um arquivo, se existir, ou cria um no caminho especificado
    //fopen("caminho, nome e extensão do arquivo", "modo da função") //O modo é a forma com que o arquivo será tratado
    //Ver a tabela de modos em https://www.php.net/manual/pt_BR/function.fopen.php
    $file = fopen("2_Arquivos\log.txt", "a+");

    //A função fwrite() serve para escrever no arquivo
    //fwrite("arquivo", "conteúdo") //"\r\n" faz com que o ponteiro retorne ao inicio da linha, e em seguida para a de baixo
    fwrite($file, date("d/m/Y H:i:s") . "\r\n");

    //O arquivo deve ser fechado após as operações
    fclose($file);

    echo "Arquivo criado com sucesso!";





?>