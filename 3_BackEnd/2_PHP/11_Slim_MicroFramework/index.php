<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

// ==== LÓGICA EXPLICADA ==== SLIM === TRABALHANDO COM ROTAS ==== //

//Quando a rota atual for "/", faça:
$app->get('/', function(){

    echo "Home Page";

    echo "</br>";

    echo json_encode(array(
        'date'=>date("Y-m-d H:i:s")
    ));

});

// Quando a rota atual for "/hello/:value"...
// Pegue o valor de ":value" e faça:
$app->get('/hello/:name', function ($value) {

    echo "Hello, " . $value;

});

$app->run();

?>