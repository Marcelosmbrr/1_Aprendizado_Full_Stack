<?php

    session_start();
    require_once("conection.php");
    require_once("../../class/Classperson.php");

    if(isset($_POST['reg_btn'])){

        //PRIMEIRO FILTRO //Recuperação filtrada do nome de usuário e senha enviados
        $username = filter_input(INPUT_POST, "username_reg", FILTER_SANITIZE_STRING);
        $pass = filter_input(INPUT_POST, "password_reg", FILTER_SANITIZE_STRING);

        //SEGUNDO FILTRO //PARA IMPEDIR XSS
        $usernamef = strip_tags($username);
        $passf = strip_tags($pass);

        //Recuperar extensão do arquivo
        //$_FILES serve para recuperar arquivos e seus dados em um array //https://www.php.net/manual/pt_BR/features.file-upload.post-method.php
        //pathinfo() retorna informações sobre um caminho de arquivo, e o modo que passei retorna a extensão do arquivo  //https://www.php.net/manual/pt_BR/function.pathinfo.php
        $extension = strtolower(pathinfo($_FILES['file_reg']['name'], PATHINFO_EXTENSION));

        if(!empty($usernamef) && !empty($passf)){

            //Se o usuário enviou uma foto para cadastro, e se for uma das extensões permitidas, o dado é preparado para inserção no banco
            if(isset($_FILES['file_reg']) && ($extension == "png" || $extension == "jpg" || $extension == "jpeg")){

                //Renomear o arquivo
                //Será: username.extensão, sendo "username" o correspondente de "login"
                $newName = strtolower($usernamef) . ".$extension";

                //Caminho relativo para o local onde estará o arquivo
                $file_path = "../../users/img/";

                //Mover o arquivo para o endereço $diretorio.$newName, ou seja, "../../users/img/username.extensão"
                move_uploaded_file($_FILES['file_reg']['tmp_name'], $file_path.$newName);

                $file_data = $newName;

            }

            //Instância da classe Person
            $object = new Person($pdo);

            $ret = $object->setUser($usernamef, $passf, $file_data);

            if($ret){

                $_SESSION['register_success'] = "Cadastro realizado com sucesso!";

                header("location: ../../register.php");

            }else{

                $_SESSION['register_error'] = "Erro no cadastro! Tente novamente!";

                header("location: ../../register.php");

            }

        }else{

            $_SESSION['register_error'] = "Preencha todos os campos! Tente novamente!";

            header("location: ../../register.php");

        }

    }else{

        $_SESSION['register_error'] = "Área restrita!";

        header("location: ../../register.php");

    }
    


            



























?>