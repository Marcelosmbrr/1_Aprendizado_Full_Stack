<?php

    //SEÇÃO COMPLETA - DOCUMENTAÇÃO:
    //https://www.php.net/manual/pt_BR/language.exceptions.php
    //https://www.php.net/manual/pt_BR/class.exception.php

    //TRATAMENTO COM TRY CATCH

    //O PHP Try Catch são blocos de comandos que tem como principal objetivo tratar exceções
    //Dessa forma, esses erros e falhas são tratados como exceções
    //o PHP try catch deve ser utilizado quando o desenvolvedor não tem como garantir que aquele código será executado com sucesso

    try{

        //A notação para se emitir a exception é com a palavra reservada throw seguida de uma instância da classe Exception
        //A instância aceita dois argumentos: o conteúdo da exceção, e um código inteiro para representa-la
        //Os códigos podem ser arbitrários, e normalmente são documentados para que existam classificações de exceções no sistema
        throw new Exception("O sistema parou de funcionar", 20);

    //A variável $error recebe o objeto Exception
    }catch(Exception $error){

        echo json_encode(array(

            "mensagem"=>$error->getMessage(),
            "linha"=>$error->getLine(),
            "arquivo"=>$error->getFile(),
            "codigo"=>$error->getCode()

        ));

    }

    //TRY CATCH COM FUNÇÃO E BLOCO OPCIONAL FINALLY

    function exibeNome($nome){

        if(!$nome){

            throw new Exception("Nenhum nome foi encontrado.", 1);

        }

        echo ucfirst($nome);

    }

    try{

        exibeNome();

    }catch(Exception $e){

        echo $e->getMessage();

    } finally { //Este bloco é executado por último, em todos os casos

        echo "O try catch foi executado";

    }