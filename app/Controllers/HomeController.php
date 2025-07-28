<?php 
namespace App\Controllers;

use \App\Utils\View;

class HomeController extends PageController{

    /**
     * Método responsável por retornar o conteúdo (view) da nossa home
     * @return string
     */

    public static function getHome(){
        
        // renderiza o arquivo html
        $content = View::render('pages/home',[
            'name' => 'testando nome',
            'description' => 'teste o teste'
        ]);
        
        // retorna a view da pagina
        return parent::getPage('Painel', $content);
    }
    
}