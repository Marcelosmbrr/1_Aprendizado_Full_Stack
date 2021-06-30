<?php

session_start();
require_once("conection.php");
require_once("../../vendor/autoload.php");
use Instances\instance_person;

if(isset($_POST['key_generation_btn'])){

    //PRIMEIRO FILTRO //Recuperação filtrada do nome de usuário e senha enviados
    $email = filter_input(INPUT_POST, "email_input_pr", FILTER_SANITIZE_EMAIL);

    if(!empty($email)){

        $check_obj = instance_person::getInstance();

        $where = "WHERE `user_email` = :email";

        $arrData = array("email"=>$email);

        $check_email = $check_obj->getUser($arrData, $where, "CHECK_EMAIL");

        if($check_email){

            //Instância da classe Person //codegen_object
            $cd_obj = instance_person::getInstance();

            //Gera um código binário
            $gen_bytes = random_bytes(25); 

            //O código binário é convertido para hexadecimal
            //Este código terá o dobro de caracteres passado como argumento para a função random_bytes()
            //https://stackoverflow.com/questions/1846202/how-to-generate-a-random-unique-alphanumeric-string/13733588#13733588
            $code = bin2hex($gen_bytes); 

            $ret = $cd_obj->keyGeneration($email, $code);

            if($ret){

                //Instância da classe Person //sendemail_object
                $se_obj = instance_person::getInstance();
                $code_send = $se_obj->sendCodeEmail($ret['code'], $check_email['username']);

                if($code_send){

                    $_SESSION['success_msg'] = "Sucesso! O código de recuperação foi enviado para o seu e-mail!";
                    echo "<script>window.location.assign('../../index.php')</script>";
    

                }else{

                    $_SESSION['error_msg'] = "Ops! Houve um erro no envio do email! Tente novamente!";
                    header("location: ../../password_recovery.php");

                }
    
            }else{
    
                $_SESSION['error_msg'] = "Ops! Houve um erro na geração do código! Tente novamente!";
    
                header("location: ../../password_recovery.php");
    
            }

        }else{

            $_SESSION['error_msg'] = "Este e-mail não foi cadastrado!";

            header("location: ../../password_recovery.php");

        }

    }else{

        $_SESSION['error_msg'] = "Preencha todos os campos! Tente novamente!";

        header("location: ../../password_recovery.php");

    }

}else{

    $_SESSION['error_msg'] = "Área restrita!";

    header("location: ../../index.php");

}

    



?>