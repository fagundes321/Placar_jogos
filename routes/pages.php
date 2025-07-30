<?php 

use \App\Http\Response;
use \App\Controllers;

//ROTA HOME

$obRouter->get('/',[
    function(){
         
        return new Response(200, Controllers\HomeController::getHome());
    }
]);

$obRouter->get('/teste',[
    function(){

        return new Response(200, Controllers\HomeController::getHome());
    
    }
]);
