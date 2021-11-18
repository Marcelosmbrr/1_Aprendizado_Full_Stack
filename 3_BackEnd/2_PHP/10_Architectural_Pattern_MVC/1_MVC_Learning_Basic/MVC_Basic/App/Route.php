<?php

/*

========== ESSA É A CLASSE DE ROTEAMENTO - ROUTE ========== 

- Como explicado na classe Route, o switch é realizado considerando o valor de $actualRoute
- Essa variável terá o valor do caminho atual da rota
- Quando a rota é encontrada (evento "match"), é realizada a instância do seu respectivo Controlador
- É esse o principio do roteamento no MVC - encontrar a rota, e acionar o controlador adequado

- O controlador renderController serve para processar as rotas que necessitam de views
- O controlador operationController serve para processar as rotas de operações

*/

namespace App;

use App\Controllers\renderController;
use App\Controllers\operationController;

class Route{

    private $actualRoute;
    private $params;

    public function __construct(string $routeReceived, $params = null){

        $this->actualRoute = $routeReceived;
        $this->params = $params;
    }

    public function initRoute(){

        $this->getRouteController();

    }

    private function getRouteController(){

        switch($this->actualRoute){

            case "/login":
                $pageFile = str_replace("/", "", $this->actualRoute);
                $layoutFile = "outside";
                $routeController = new renderController($pageFile, $layoutFile, $this->params);
            break;

            case "/":
                $pageFile = "login";
                $layoutFile = "outside";
                $routeController = new renderController($pageFile, $layoutFile, $this->params);
            break;
        
            case "/registration":
                $pageFile = str_replace("/", "", $this->actualRoute);
                $layoutFile = "outside";
                $routeController = new renderController($pageFile, $layoutFile, $this->params);
            break;
        
            case "/change_password":
                $pageFile = str_replace("/", "", $this->actualRoute);
                $layoutFile = "outside";
                $routeController = new renderController($pageFile, $layoutFile, $this->params);
            break;
        
            case "/home":
                $pageFile = str_replace("/", "", $this->actualRoute);
                $layoutFile = "inside";
                $routeController = new renderController($pageFile, $layoutFile, $this->params);
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

            case "/logout":
                $operation = "logout";
                $routeController = new operationController($operation);
            break;
            
            default:
                $pageFile = "error";
                $layoutFile = "outside";
                $routeController = new renderController($pageFile, $layoutFile);
            break;
        }

        $this->initRouteController($routeController);

    }

    private function initRouteController(Object $routeController){

        $routeController->processRequest();

    }




}