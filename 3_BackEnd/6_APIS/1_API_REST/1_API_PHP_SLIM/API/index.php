<?php

require_once(__DIR__ ."/vendor/autoload.php");

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->get('/pessoa', function (Request $request, Response $response, $args) {

    $personData = array(
        "nome" => "Marcelo de Souza Moreira",
        "sexo" => "Masculino",
        "keyade" => 23,
        "país" => "Brasil",
        "estado" => "Rio Grande do Sul",
        "ckeyade" => "Pelotas",
        "ocupação" => array("estudante", "desenvolvedor web"),
        "date" => date("d/m/Y H:i:s")
    );

    // JSON_UNESCAPED_UNICODE = Codificação utf-8 para json_encode()
    $response->getBody()->write(json_encode($personData, JSON_UNESCAPED_UNICODE));
    return $response->withHeader('Content-type', 'application/json');


});

$app->get('/lista', function (Request $request, Response $response, $args) {

    $listData = array(
        "1" => "Maça",
        "2" => "Banana",
        "3" => "Alface",
        "4" => "Tomate",
        "5" => "Leite"
    );

    // JSON_UNESCAPED_UNICODE = Codificação utf-8 para json_encode()
    $response->getBody()->write(json_encode($listData, JSON_UNESCAPED_UNICODE));
    return $response->withHeader('Content-type', 'application/json');
});

$app->run();