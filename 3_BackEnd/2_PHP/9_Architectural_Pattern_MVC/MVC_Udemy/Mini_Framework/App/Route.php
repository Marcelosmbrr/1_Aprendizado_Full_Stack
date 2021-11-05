<?php

// ESSE ARQUIVO POSSUI A CONFIGURAÇÃO DAS ROTAS
// A CLASSE ROUTE HERDA DA CLASSE BOOTSTRAP
// A CLASSE BOOTSTRAP POSSUI AS "ENGRENAGENS" PARA O MAQUINÁRIO DO ROTEAMENTO
// O NOME "BOOTSTRAP" É COMUMENTE UTILIZADO PARA ARQUIVOS COM CONFIGURAÇÕES DE INICIALIZAÇÃO

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap{

    // Definição das rotas
    protected function initRoutes(){

        // Cada rota tem um array de configurações
        // A chave "route" especifica a URI
        // A chave "controller" especifica o controlador da rota
        // A chave "action" especifica a ação da rota, isto é, o arquivo que será carregado

        $routes["home"] = array(
            "route" => "/", 
            "controller" => "indexController", 
            "action" => "index"
        );

        $routes["about_us"] = array(
            "route" => "/aboutus", 
            "controller" => "indexController", 
            "action" => "aboutUs"
        );

        // Chama o setter enviando a configuração das rotas
        $this->setRoutes($routes);

    }
}

