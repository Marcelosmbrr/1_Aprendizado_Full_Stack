<?php

/*

========== ESSE É O ENTRY POINT DA APLICAÇÃO ========== 

- Esse é o arquivo que será acessado pelos usuários via HTTP
- Qualquer rota, se não terminada com .php, irá redirecionar o usuário para esse arquivo, index.php // Por isso o roteamento é possível
- Nele é realizada a instância da classe Route, que é um mecanismo de "roteamento" criado com um switch

- Como explicado na classe Route, o switch é realizado considerando o valor de $_SERVER["REQUEST_URI"]
- Quando a rota é encontrada (evento "match"), é realizada a instância do seu respectivo Controlador

*/

require_once($_SERVER["DOCUMENT_ROOT"]."/../vendor/autoload.php");

// ==== DOTENV ==== //

$dotenv = Dotenv\Dotenv::createUnsafeImmutable($_SERVER["DOCUMENT_ROOT"]."/../App");
$dotenv->load();

// ==== ROTEAMENTO ==== //

use App\Route;
use App\Connection;

$route = new Route($_SERVER["REQUEST_URI"]);
$routeController = $route->initRoute();


?>


