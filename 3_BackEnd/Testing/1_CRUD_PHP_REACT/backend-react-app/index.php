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

    // ==== COMPARAÇÃO VALOR ORIGINAL - VALOR FILTRADO ==== // 
    $emailComparison = $data["email"] == $_POST["loginData"]["email"];

    // Se o valor passar nos testes, e seu estado filtrado for igual ao original
    // Se o valor for diferente do original, ele estava incorreto
    if($data["email"] && $data["password"] && $emailComparison){

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
    $filteredName = strip_tags($name);
    $filteredLastName = strip_tags($last_name);
    $filteredEmail = strip_tags($email);

    // Estrutura de dados para o registro 
    $data = array(
        "name"=>$filteredName,
        "last_name"=>$filteredLastName,
        "email"=>$filteredEmail,
        "password"=>$_POST["registerUserData"]["password"],
        "operation" => "REGISTRATION"
    );

    // ==== COMPARAÇÃO VALOR ORIGINAL - VALOR FILTRADO ==== // 
    $nameComparison = $data["name"] == $_POST["registerUserData"]["name"];
    $lastNameComparison = $data["last_name"] == $_POST["registerUserData"]["last_name"];
    $emailComparison = $data["email"] == $_POST["registerUserData"]["email"];

    // Se nenhum valor for false
    if(($data["name"] && $data["last_name"] && $data["email"] && $data["password"]) && ($nameComparison && $lastNameComparison && $emailComparison)){

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

    // ==== FILTRAGEM DOS DADOS 1 - SANITIZE ==== //
    $email = filter_input(INPUT_POST, "sendEmail", FILTER_SANITIZE_EMAIL);

    // ==== FILTRAGEM DOS DADOS 2 - XSS E VALIDATE ==== //
    $filteredEmail = filter_var(strip_tags($email), FILTER_VALIDATE_EMAIL);

    // ==== COMPARAÇÃO VALOR ORIGINAL - VALOR FILTRADO ==== // 
    $emailComparison = $filteredEmail == $_POST["sendEmail"];

    // Se nenhum valor for false
    if($filteredEmail && $emailComparison){

        // Comunicação com o Mailer - Configurar PHPMailer
        $objMailer = new Mailer();
        // Comunicação com o Controller - Enviar o código para o registro do usuário
        $objController = new Controller();

        // ==== Configuração 1 - Server ==== //
        $data = array(
            "server" => array(
                "host" => "smtp.mailtrap.io",
                "username" => "8dce0fcd43479b",
                "password" => "36a1c0cf287500",
                "port" => 2525
            )
        );
        $objMailer->setServerSettings($data);

        // ==== Configuração 2 - Remetente e destinatário ==== //
        $data = array(
            "sender" => array("email" => "system_crud@outlook.com", "name" => "Crud System"),
            "recipient" => array("email" => "user@outlook.com", "name" => "User Person")
        );
        $objMailer->setRecipientSettings($data);

        // ==== Configuração 3 - Arquivos, se houverem ==== //
        //$objMailer->setAttachments($data);

        // ==== Configuração 4 - Conteúdo (código) e estruturação da mensagem ==== //
        $code = random_int(1000, 9999);
        $data = array(
            "html" => true,
            "subject" => "Código para alteração de senha",
            "body" => "<p> Para alterar a senha utilize o seguinte código: <b>$code</b> </p>",
            "altbody" => "Não responda este e-mail"
        );
        $objMailer->setMailContent($data);

        // ==== Configurações prontas - Enviar email ==== // 
        $ret = $objMailer->SendEmail();

        // Se o envio do e-mail for um sucesso
        if($ret["status"]){

            $response = $objController->UpdateUser(array("operation" => "EMAIL_CODE", "data" => array("email" => $email, "code" => $code)));

            // Envio da resposta para o front
            echo json_encode($response);
        
        // Se o envio do e-mail falhar
        }else{

            // Envio da resposta para o front
            echo json_encode($ret);

        }

        

    }

}

if(isset($_POST["changePassword"])){

    // ==== RECUPERAÇÃO DA SENHA E CÓDIGO ==== //
    $password = $_POST["changePassword"]["new_password"];
    $code = $_POST["changePassword"]["code"];

    // ==== FILTRAGEM DOS DADOS 1 - REGEX ==== //
    $codeMatch = preg_match("/[0-9]{4}/", $code);
    $passwordMatch = preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/", $password);

    if($passwordMatch && $codeMatch){

        // ==== FILTRAGEM DOS DADOS 2 - XSS ==== //
        $filteredPassword = strip_tags($password);
        $filteredCode = strip_tags($code);

        // ==== COMPARAÇÃO VALOR ORIGINAL - VALOR FILTRADO ==== // 
        $passwordComparison = $filteredPassword == $_POST["changePassword"]["new_password"];
        $codeComparison = $filteredCode == $_POST["changePassword"]["code"];

        // Se nenhum for false
        if($passwordComparison && $codeComparison){

            // Comunicação com o Mailer - Verificar código e mudar a senha
            $objController = new Controller();

            $data = array("operation" => "EMAIL_CODE", "code" => $code);

            $queryConfig =  array(
                "searchedField" => "code",
                "table" => "persons",
                "where" => "WHERE code = :code",
                "order" => null,
                "limit" => null,
                "offset" => null
            );

            $response = $objController->LoadData($data, $queryConfig);

            if($response["status"]){

                $data = array("operation" => "UPDATE_PASSWORD", "code" => $code, "new_password" => $password);

                $response = $objController->UpdateUser($data);

                // Envio da resposta para o front
                echo json_encode($response);

            }else{

                // Envio da resposta para o front
                echo json_encode($response);

            }


        }

    }  

}

if(isset($_POST["tokenDecode"])){

    $token = json_decode($_POST["tokenDecode"]["value"]);

    // Comunicação com o Controller - Resgatar dados do token
    $objController = new Controller();
    $response = $objController->GetTokenData($token);

    // Envio da resposta para o front
    echo json_encode($response);

}
