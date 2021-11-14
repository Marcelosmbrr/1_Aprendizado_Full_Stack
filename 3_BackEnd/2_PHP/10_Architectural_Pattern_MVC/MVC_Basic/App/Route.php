<?php

/*

========== ESSA É A CLASSE DE ROTEAMENTO - ROUTE ========== 

- Como explicado na classe Route, o switch é realizado considerando o valor de $_SERVER["REQUEST_URI"]
- Quando a rota é encontrada (evento "match"), é realizada a instância do seu respectivo Controlador

- O controlador outsideController serve para controlar as actions das páginas externas - que estão fora do sistema
- O controlador insideController serve para controlar as actions das páginas internas - que estão dentro do sistema

*/

namespace App;

use App\Controllers\renderController;
use App\Controllers\operationController;

class Route{

    private $actualRoute;

    public function __construct(string $routeReceived){

        $this->actualRoute = $routeReceived;
    }

    public function initRoute(){

        $this->getRouteController();

    }

    private function getRouteController(){

        switch($this->actualRoute){

            case "/login":
                $pageFile = str_replace("/", "", $this->actualRoute);
                $layoutFile = "outside";
                $routeController = new renderController($pageFile, $layoutFile);
            break;

            case "/":
                $pageFile = "login";
                $layoutFile = "outside";
                $routeController = new renderController($pageFile, $layoutFile);
            break;
        
            case "/registration":
                $pageFile = str_replace("/", "", $this->actualRoute);
                $layoutFile = "outside";
                $routeController = new renderController($pageFile, $layoutFile);
            break;
        
            case "/change_password":
                $pageFile = str_replace("/", "", $this->actualRoute);
                $layoutFile = "outside";
                $routeController = new renderController($pageFile, $layoutFile);
            break;
        
            case "/home":
                $pageFile = str_replace("/", "", $this->actualRoute);
                $layoutFile = "inside";
                $routeController = new renderController($pageFile, $layoutFile);
            break;

            case "/doaccess":
                $operation = "login";
                $routeController = new operationController($operation);
            break;

            case "/doregister":
                $operation = "registration";
                $routeController = new operationController($operation);
            break;

            case "/sendcode":
                $operation = "send_code_to_email";
                $routeController = new operationController($operation);
            break;

            case "/dopasswordchange":
                $operation = "change_password";
                $routeController = new operationController($operation);
            break;
            
            default:
                $pageFile = "error";
                $layoutFile = "outside";
                $routeController = new renderController("error");
            break;
        }

        $this->initRouteController($routeController);

    }

    private function initRouteController(Object $routeController){

        $routeController->processRequest();

    }




}