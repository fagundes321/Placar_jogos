<?php

require_once __DIR__ . '/../vendor/autoload.php';


use \App\Http\Router;
use \App\Http\Response;
use \App\Controllers\HomeController;

define('URL', 'http://localhost:999');

$obRouter = new Router(URL);

//ROTA HOME
$obRouter->get('/',[
    function(){
        return new Response(200, HomeController::getHome());
    }
]);

// IMPRIME O RESPONSE DA ROTA
$obRouter->run()->sedResponse();

// $controller = new PontuadorController();
// $controller->index();
