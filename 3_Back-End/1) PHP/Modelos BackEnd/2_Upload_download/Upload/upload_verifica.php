<?php

    session_start();
    require_once("Conexao/conexao.php");
    require_once("Classes/FileClass.php");

    //Recuperar arquivo
    //O botão submit envia esse valor, via url, quando clicado
    //Portanto, se foi clicado...
    if(isset($_POST["btn_save-upload"])){

        //PRIMEIRO FILTRO
        if(isset($_FILES["arquivo_enviado"]) && !empty($_FILES["arquivo_enviado"])){

            //PREPARANDO O ARQUIVO////////////////

            //Variável para conter as extensões permitidas
            $extensionsPermited = array("png", "jpg", "jpeg", "gif");

            //Recuperar extensão do arquivo
            //$_FILES, um array, serve para recuperar arquivos e seus dados //https://www.php.net/manual/pt_BR/reserved.variables.files.php
            $extension = strtolower(pathinfo($_FILES['arquivo_enviado']['name'], PATHINFO_EXTENSION));

            //Renomear o arquivo
            //Será: id_único.extensão
            $novoNome = uniqid() . ".$extension";

            //Caminho da pasta
            $diretorio = "Upload/img_upload/";

            //Mover arquivo para o endereço $diretorio.$novoNome, ou seja, "upload/uniqid().extensão"
            move_uploaded_file($_FILES['arquivo_enviado']['tmp_name'], $diretorio.$novoNome);

            //ENVIANDO PARA O BANCO DE DADOS/////////

            $obj_envio = new File($pdo);

            $sql = "INSERT INTO files (codigo, arquivo, data_up) VALUES (DEFAULT, :nome_arquivo, NOW())";

            $set_retorno = $obj_envio->setFile($sql, $novoNome);

            //Se o método setFile retornar true
            if($set_retorno){

                //$_SESSION["imagem_salva"] = $novoNome;
                header("location: http://localhost:8000/");
            
            //Se o método setFile retornar false
            }else{

                //$_SESSION["erro_msg"] = "Erro com a inserção do arquivo no banco de dados!";
                header("location: http://localhost:8000/");

            }


        }else{

            $_SESSION["erro_msg"] = "Erro com o arquivo enviado!";
            header("location: http://localhost:8000/");

        }

        
    }












?>