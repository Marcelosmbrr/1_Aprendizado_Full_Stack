<?php

// ==== Autorização CORS e Header JSON ==== //
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

// ==== Composer Autoload ==== //
require_once("vendor/autoload.php");

// ==== Classe Controller ==== //
use Classes\Controller;
use Services\Mailer;

if(isset($_POST["loginData"])){

    // ==== FILTRAGEM DOS DADOS 1 - SANITIZE E REGEX ==== //
    $email = filter_var($_POST["loginData"]["email"], FILTER_SANITIZE_EMAIL);

    // ==== FILTRAGEM DOS DADOS 2 - XSS E VALIDATE ==== //
    $emailf = filter_var(strip_tags($email), FILTER_VALIDATE_EMAIL);

    // Estrutura de dados para o login 
    $data = array(
        "email"=> $emailf,
        "password"=> $_POST["loginData"]["password"],
        "operation"=>"LOGIN",
        "browser" => $_POST["loginData"]["browser"]
    );

    if(!$data["email"] == false && !$data["password"] == false){

        // Comunicação com o Controller - Processar login
        $objController = new Controller();
        $response = $objController->UserLogin($data);

    }else{

        $response = array("status"=> false, "error"=>"default", "message" => null);

    }

    // Retorno do servidor
    echo json_encode($response);
   
}

if(isset($_POST["registerUserData"])){

    // ==== FILTRAGEM DOS DADOS 1 - SANITIZE ==== //
    $name = filter_var($_POST["registerUserData"]["name"], FILTER_SANITIZE_STRING);
    $last_name = filter_var($_POST["registerUserData"]["last_name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["registerUserData"]["email"], FILTER_SANITIZE_EMAIL);

    // ==== FILTRAGEM DOS DADOS 2 - XSS E VALIDATE ==== //
    $filteredName = filter_var(strip_tags($name), FILTER_SANITIZE_STRING);
    $filteredLastName = filter_var(strip_tags($last_name), FILTER_SANITIZE_STRING);
    $filteredEmail = filter_var(strip_tags($email), FILTER_SANITIZE_EMAIL);

    // Estrutura de dados para o registro 
    $data = array(
        "name"=>$filteredName,
        "last_name"=>$filteredLastName,
        "email"=>$filteredEmail,
        "password"=>$_POST["registerUserData"]["password"],
        "operation" => "REGISTRATION"
    );

    if(!$data["name"] == false && !$data["last_name"] == false && !$data["email"] == false && !$data["password"] == false){

        // Comunicação com o Controller - Realizar registro
        $objController = new Controller();

        $response = $objController->UserRegistration($data);

    }else{

        // Erro - tipo default - sem especificação
        $response = array("status" => false, "error" => "default", "message" => null);

    }

    // Retorno do servidor
    echo json_encode($response);

}

if(isset($_POST["sendEmail"])){

    // Teste
    $response = array("status" => true);
    echo json_encode($response);

    //ENVIAR EMAIL
    //SE O PROCESSO FOR BEM SUCEDIDO, RETORNAR TRUE, SE NÃO, FALSE
    //echo json_encode($response);

    $email = filter_input(INPUT_POST, "emailToSendCode", FILTER_SANITIZE_EMAIL);

}

if(isset($_POST["changePassword"])){

    echo("CHANGE EMAIL BACK-END");

}

if(isset($_POST["tokenDecode"])){

    $token = json_decode($_POST["tokenDecode"]["value"]);

    // Comunicação com o Controller - Resgatar dados do token
    $objController = new Controller();
    $response = $objController->GetTokenData($token);

    echo json_encode($response);

}
