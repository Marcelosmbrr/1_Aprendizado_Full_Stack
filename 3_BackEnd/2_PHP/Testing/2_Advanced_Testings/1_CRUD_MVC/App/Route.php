<?php

// ESSE ARQUIVO POSSUI A CONFIGURAÇÃO DAS ROTAS
// A CLASSE ROUTE HERDA DA CLASSE BOOTSTRAP
// A CLASSE BOOTSTRAP POSSUI AS "ENGRENAGENS" PARA O MAQUINÁRIO DO ROTEAMENTO
// O NOME "BOOTSTRAP" É COMUMENTE UTILIZADO PARA ARQUIVOS COM CONFIGURAÇÕES DE INICIALIZAÇÃO

namespace App;

use Core\Init\Bootstrap;

class Route extends Bootstrap{

    // Definição das rotas
    protected function initRoutes(){

        // Cada rota tem um array de configurações
        // A chave "route" especifica a URI
        // A chave "controller" especifica o controlador da rota
        // A chave "action" especifica a ação da rota, isto é, o arquivo que será carregado

        $routes["login"] = array(
            "route" => "/", 
            "controller" => "IndexController", 
            "action" => "login"
        );

        $routes["registration"] = array(
            "route" => "/registration", 
            "controller" => "IndexController", 
            "action" => "registration"
        );

        $routes["dashboard"] = array(
            "route" => "/system/dashboard", 
            "controller" => "IndexController", 
            "action" => "dashboard"
        );

        $routes["newproduct"] = array(
            "route" => "/system/newproduct", 
            "controller" => "IndexController", 
            "action" => "newproduct"
        );

        // Chama o setter enviando a configuração das rotas
        $this->setRoutes($routes);

    }
}

