<?php

    $nome_pasta = "mkdir_result";

    $remove = false;

    //Se não existir um diretório local com nome igual ao valor da variável $nome_pasta
    if(!is_dir($nome_pasta)){

        //Crie um //mkdir = make directory
        mkdir($nome_pasta);

        //E informe que foi criado
        echo "Diretório {$nome_pasta} criado com sucesso!";
    
    //Se já existir um
    } else {

        //Informe que já existe
        echo "Já existe um diretório com nome: {$nome_pasta}";

        //Se a variável $remove for true
        if($remove){

            //Remova-o //rmdir = remove directory
            rmdir($nome_pasta);

            //E informe que foi removido
            echo "O diretório foi removido";

        }
    
    }











?>