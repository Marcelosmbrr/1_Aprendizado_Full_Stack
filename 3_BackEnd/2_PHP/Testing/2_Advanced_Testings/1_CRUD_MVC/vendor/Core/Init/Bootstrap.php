<?php

// ARQUIVO DE INICIALIZAÇÃO DOS MECANISMOS DO ROTEAMENTO
// O NOME "BOOTSTRAP" É COMUMENTE UTILIZADO PARA ARQUIVOS COM CONFIGURAÇÕES DE INICIALIZAÇÃO
// UMA CLASSE ABSTRATA É "INICIALIZADA" QUANDO É HERDADA

namespace Core\Init;

abstract class Bootstrap{

    private $routes;

    abstract protected function InitRoutes();

    // O construct inicializa o maquinário do roteamento
    public function __construct(){

        // Configuração das rotas
        // Atribuição da configuração ao atributo das classes
        $this->initRoutes();

        // Mecanismo "Match" da rota
        // Verifica a rota atual
        // Se a rota atual for igual a uma das rotas existentes
        // Realiza dinamicamente a instância do Controller da rota, e dispara a sua action
        $this->run($this->getUrl());
    }

    // Método getter: recuperar a configuração das rotas
    public function getRoutes(){
        return $this->routes;
    }

    // Método setter: armazenar a configuração das rotas no atributo da classe
    public function setRoutes(array $routes){
        return $this->routes = $routes;  
    }

    protected function run($url){

        //echo "URL: $url";

        $routeFounded = false;

        // Iteração no array de rotas configuradas
        foreach($this->getRoutes() as $key => $route){

            // Se a URL digitada for igual a alguma das rotas configuradas
            if($url == $route['route']){

                $routeFounded = true;

                // Instanciação dinâmica do controller

                // Se a rota atual, digitada, for "home" ou "aboutUs"...
                // A classe indexController, da atual rota, deve ser instanciada

                $class = "App\\Controllers\\".$route["controller"];  //echo $class;

                $controller = new $class; //echo $class;
                $action = $route["action"]; //echo $action;
                $controller->$action();

            }

        }

        // Configuração do caso em que a rota não é encontrada
        // Erro 404
        if(!$routeFounded){

            //

        }


    }

    // Retorna a URL em um array com seus componentes
    protected function getUrl(){

        // parse_url: quebra a URL em um array de componentes - https://www.php.net/manual/pt_BR/function.parse-url.php
        // $_SERVER: array associativo com dados do servidor
        // PHP_URL_PATH: opção de parse_url para retornar apenas o path da URL
    
        return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    }

    
}