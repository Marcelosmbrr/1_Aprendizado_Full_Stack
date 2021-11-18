<?php

/*

==================== MODEL VARIANTE - PERSON ====================

- Esse model serve para carregar os dados do banco de dados referentes a tabela de pessoas cadastradas
- Nessa aplicação de teste, é utilizado no processo de Login e Registro
- E também é utilizado no processo de validação da sessão do Usuário

*/

namespace App\Models;
use Generic\Model;
use PDO;

class Person extends Model{


    public function loadPersonRecord(array $data, $operation) :array {

        // CARREGAR REGISTRO DE UMA ÚNICA PESSOA

        if($operation === "LOGIN"){

            $query = "SELECT `id`, `email`, `username`, `password` FROM users WHERE username = :username";
            $params = array(":username" => $data["username"]);

            $ret = $this->select($query, $params);

            if($ret["status"]){

                $passwordVerification = password_verify($data["password"], $ret["data"][0]["password"]);

                if($passwordVerification){

                    return array("status"=>true, "data"=>array("id"=>$ret["data"][0]["id"],$ret["data"][0]["username"], $ret["data"][0]["email"]));

                }else{

                    return array("status"=>false, "message"=>"Usuário ou senha incorretos!");

                }

            }else{

                return array("status"=>false, "message"=>"Usuário ou senha incorretos!");

            }

        }else if($operation === "SEARCH"){

        }

    }

    public function loadAllPersonsRecords() :array {

        // CARREGAR REGISTRO DE VÁRIAS PESSOAS

        $query = "SELECT `id`, `email`, `username` FROM users";

        $ret = $this->select($query, []);

        if($ret["status"]){

            return $ret;

        }else{

            return array("status"=>false, "message"=>"Usuário ou senha incorretos!");

        }




    }

    public function newPersonRecord(array $data) :array {

        // INSERIR O REGISTRO DE UMA PESSOA

        $query = "INSERT INTO users(email, username, password) VALUES (:email, :username, :password)";
        $params = array(":email" => $data["email"], ":username"=> $data["username"], ":password"=>password_hash($data["password"], PASSWORD_DEFAULT));

        $ret = $this->insert($query, $params);

        if($ret["status"]){

            $ret["message"] = "Cadastro realizado com sucesso!";

        }else{

            $ret["message"] = "O cadastro falhou. Tente novamente!";

        }

        return $ret;

    }

    public function deletePersonRecord() :array {

        // DELETAR O REGISTRO DE UMA PESSOA

    }

    public function validateSession() :bool {

        // VALIDAR A SESSÃO DA PESSOA

    }

}
