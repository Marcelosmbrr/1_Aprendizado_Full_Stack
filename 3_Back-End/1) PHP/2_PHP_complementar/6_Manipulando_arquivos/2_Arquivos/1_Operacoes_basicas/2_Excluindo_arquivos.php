<?php

    $file = fopen("2_Arquivos\log2.txt", "a+");

    fwrite($file, "Teste de exclusão". "\r\n");

    //O arquivo deve ser fechado após as operações
    fclose($file);

    echo "Arquivo criado com sucesso!";
    
    echo "Agora será excluído. Para fazer isso, mude o valor da variável abaixo para true!";
    $remove = true;

    if($remove){

        //A função Unlink apaga um arquivo
        //Se for declarada a variável em si, será apagado apenas o ponteiro para o arquivo
        unlink("log2.txt");

        echo "Arquivo excluído com sucesso!";

    }
    

    











?>