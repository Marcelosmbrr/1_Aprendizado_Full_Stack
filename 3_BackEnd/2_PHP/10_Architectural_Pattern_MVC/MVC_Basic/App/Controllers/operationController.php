<?php

/*

==================== CONTROLADOR DO SISTEMA EXTERNO ====================

- Esse controlador serve para controlar o sistema externo
- Ele recebe a rota atual, e renderiza as suas Views adequadas - que é o Layout padrão e o conteúdo da página
- Ele se comunica com o Model para preencher nutrir essas Views com os dados necessários

*/

namespace App\Controllers;
use App\Models\Person;

session_start();

class operationController{

    private object $model;
    private string $operation;

    public function __construct(string $operation){
        $this->model = new Person();

        $this->operation = $operation;

    }

    public function processRequest(){

        $this->getRequestData();

    }

    private function getRequestData(){

        switch($this->operation){

            case "login":
                echo "ROTA PARA PROCESSAMENTO DO LOGIN";
                echo "<br>";
                echo "USERNAME: {$_POST['login_username']} ||| SENHA: {$_POST['login_password']}";

                $data = array("username"=>$_POST['login_username'], "password"=>$_POST['login_password']);

                $ret = $this->model->loadPersonRecord($data,strtoupper($this->operation)); // LOGIN

                // CONTINUAR
                print_r($ret);
               
            break;

            case "registration":
                echo "ROTA PARA PROCESSAMENTO DO REGISTRO";
                echo "<br>";
                echo "EMAIL: {$_POST['registration_email']} ||| USERNAME: {$_POST['registration_username']} ||| SENHA: {$_POST['registration_password']}";

                $data = array("email"=>$_POST['registration_email'], "username"=>$_POST['registration_username'], "password"=>$_POST['registration_password']);

                $ret = $this->model->newPersonRecord($data,strtoupper($this->operation)); // LOGIN

                $_SESSION["operation"] = $ret["message"];
                header("location: /registration");

            break;

            case "send_code_to_email":
                echo "ROTA PARA PROCESSAMENTO DO ENVIO DO CÓDIGO PARA O EMAIL";
                echo "<br>";
                echo "SENDING CODE TO: {$_POST['send_code_email']}";
            break;

            case "change_password":
                echo "ROTA PARA PROCESSAMENTO DA ALTERAÇÃO DE SENHA";
                echo "<br>";
                echo "CODE: {$_POST['email_code']} ||| NEW PASSWORD: {$_POST['new_password']}";
            break;

        }

    }

}