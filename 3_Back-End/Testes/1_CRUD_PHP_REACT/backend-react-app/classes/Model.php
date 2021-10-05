<?php

namespace Classes;

// ==== Composer Autoload ==== //
require_once("vendor/autoload.php");

// ==== Token JWT ==== https://github.com/firebase/php-jwt ==== https://www.youtube.com/watch?v=B-7e-ZpIWAs ==== //
use Firebase\JWT\JWT;

// ==== Classe Connection ==== //
use Classes\Connection;
use PDO;

// ==== CONEXÃO E EXECUÇÃO DO SQL //
$pdo = Connection::getInstance();

class Model{

    private $pdo;

    public function __construct(){

        $this->pdo = Connection::getInstance();

    }


    public function InsertData($query, $data = array()){

        $this->pdo->beginTransaction();

        $statment = $this->pdo->prepare($query);

        $pass_crypt = password_hash($data["password"], PASSWORD_DEFAULT);
        $username = $data["name"].substr(uniqid(), -3);

        $statment->bindParam(":email", $data["email"]);
        $statment->bindParam(":name", $data["name"]);
        $statment->bindParam(":last_name", $data["last_name"]);
        $statment->bindParam(":password", $pass_crypt);
        $statment->bindParam(":username", $username);

        if($statment->execute()){

            $this->pdo->Commit();

            $response = array("status" => true);

        }else{

            $this->pdo->Rollback();

            $response = array("status" => false);

        }

        // Retorno da operação de inserção
        return $response;


    }

    public function SelectData($query, $data = array()){

        $statment = $this->pdo->prepare($query);

        // Programação da operação de login
        // É utilizado para acessar o sistema
        if($data["operation"] == "LOGIN"){

            $statment->bindParam(":email", $data["email"]);
            $statment->execute();

            if($statment->rowCount() == 1){

                $returnedData = $statment->fetchAll(PDO::FETCH_ASSOC);
        
                if(password_verify($data["password"], $returnedData[0]["password"])){
        
                    $jwt_data = array(
                        "full_name" => "{$returnedData[0]['name']} {$returnedData[0]['last_name']}",
                        "email" => $returnedData[0]["email"],
                        "username" => $returnedData[0]["username"],
                        "access" => $returnedData[0]["access"],
                        "browser"=>$data["browser"]
                    );
        
                    //Informações sigilosas não devem ser utilizadas no código //Ver: https://www.youtube.com/watch?v=mMR5v2YW8r4
                    $JWT_KEY = "simple_key_example";
                    $jwt_token = JWT::encode($jwt_data, $JWT_KEY);
                    
                    // Sucesso - combinação digitada email-senha existe
                    $response = array("status" => true, "data" => $jwt_token);
        
                }else{
                    
                    // Erro - tipo senha - senha incorreta
                    $response = array("status" => false, "error" => "senha", "message" => "Senha incorreta!");
        
                }
    
            }else{

                // Erro - tipo email - email inexistente
                $response = array("status" => false, "error" => "email", "message" => "Esse email não existe!");
        
            }

        // Programação da operação de carregamento de todos os usuários
        // É utilizado dentro do sistema, para preencher uma tabela
        }else if($data["operation"] == "LOAD_USERS"){

            //SELEÇÃO DE DADOS - OPERAÇÃO CARREGAR TODOS OS USUÁRIOS

        }else if($data["operation"] == "REGISTRATION"){

            $statment->bindParam(":email", $data["email"]);
            $statment->execute();
            
            if($statment->rowCount() == 1){

                // Nesse caso, o email que se pretende utilizar já existe
                $response = array("status" => true);

                return $response;

            }else{

                // Nesse caso, o email que se pretende utilizar não existe
                $response = array("status" => false);

            }

        }

        // Retorno da operação de seleção
        return $response;

    }

    public function UpdateData($data = array()){

        if($data["operation"] == "UPDATE_PASSWORD"){


        }else if($data["operation"] == "UPDATE_USER"){


        }

    }

    public function DeleteData($data = array()){


    }


}