<?php

require_once __DIR__ . '/../vendor/autoload.php';


use \App\Http\Router;


define('URL', 'http://localhost:999');

$obRouter = new Router(URL);

// INCLUE AS ROTAS DE PAGINAS
include __DIR__ . '/../routes/pages.php';


// IMPRIME O RESPONSE DA ROTA
$obRouter->run()
         ->sendResponse();

