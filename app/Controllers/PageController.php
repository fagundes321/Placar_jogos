<?php

namespace App\Controllers;

use \App\Utils\View;

class PageController
{

    /**
     * Método responsável por renderizar o topo da página
     */

    public static function getHeader(){
        return View::render('pages/template/header');
    }

    /**
     * Método responsável por renderizar o rodapé da pagina
     */

    public static function getFooter(){
        return View::render('pages/template/footer');
    }

    /**
     * Método responsável por retornar o conteúdo (view) da nossa página genérica
     * @return string
     */

    public static function getPage($title, $content)
    {

        return View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }
}
