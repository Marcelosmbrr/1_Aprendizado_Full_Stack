<?php

namespace Classes;

// ==== Composer Autoload ==== //
require_once("vendor/autoload.php");

// ==== Classe Model ==== //
use Classes\Model;

// ==== Token JWT ==== https://github.com/firebase/php-jwt ==== https://www.youtube.com/watch?v=B-7e-ZpIWAs ==== //
use Firebase\JWT\JWT;

class Controller{

    private $model;

    public function __construct(){

        $this->model = new Model();

    }

    // Método para o Login
    public function UserLogin($data = array()){

        $query = "SELECT `name`, `last_name`, `email`, `username`, `password`, `access` FROM persons WHERE `email` = :email";

        $response = $this->model->SelectData($query, $data);

        return $response;

    }

    // Método para carregar dados gerais
    public function LoadData($data = array(), $queryConfig){

        // Fatores variáveis da query
        $searchedField = $queryConfig["searchedField"];
        $table = $queryConfig["table"];
        $where = $queryConfig["where"];
        $order = $queryConfig["order"];
        $limit = $queryConfig["limit"];
        $offset = $queryConfig["offset"];

        // Montagem da query
        $query = "SELECT $searchedField FROM $table $where $order $limit $offset";

        // Operação de verificação da existência do email
        $response = $this->model->SelectData($query, $data);

        return $response;

    }

    // Método para realizar registro
    public function UserRegistration($data = array()){

        $queryConfig = array(
            "searchedField" => "`email`",
            "table"=> "persons",
            "where" => "WHERE email = :email",
            "order" => null,
            "limit"=> null,
            "offset"=> null
        );

        // Retorno será um "status" true, ou false
        $verifyEmail = $this->LoadData($data, $queryConfig);

        // O email já existe
        if($verifyEmail["status"]){

            // Erro - tipo campo do email - o email já existe
            $response = array("status" => false, "error" => "email_field", "message" => "Esse email já existe!");
        
        // O email não existe
        }else{

            $data["operation"] = "USER_REGISTRATION";

            // Retorno será um "status" true, ou false
            $response = $this->model->InsertData($data);

            // Insert realizado com sucesso
            if($response["status"]){

                // Sucesso - cadastro realizado
                $response = array("status" => true, "error" => null , "message" => null);
            
            // Falha no insert
            }else{

                // Erro - sem especificação
                $response = array("status" => false, "error" => null, "message" => null);

            }

        }

        return $response;

    }

    // Método para atualizar dados de usuários
    public function UpdateUser($data = array()){

        if($data["operation"] == "EMAIL_CODE"){

            if($this->model->UpdateData($data)){

                $response = array("status" => true);

            }else{

                $response = array("status" => false);

            }


        }else if($data["operation"] == "UPDATE_PASSWORD"){

            if($this->model->UpdateData($data)){

                $response = array("status" => true);

            }else{

                $response = array("status" => false);

            }

        }else if($data["operation"] == "UPDATE_PROFILE"){

        }

        // Retorno
        return $response;

    }

    // Método para decodificar o token JWT
    public function GetTokenData($token){

        $JWT_KEY = "simple_key_example";

        $decoded = JWT::decode($token, $JWT_KEY, array('HS256'));

        $decoded_array = (array) $decoded;

        $response = array("status" => true, "data" => $decoded_array);

        return $response;

    }

}