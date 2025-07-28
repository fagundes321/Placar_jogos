<?php

namespace App\Http;

class Request
{

    /**
     * Método HTTP da requisição
     * @var string
     */
    private $httpMethod;

    /**
     * URI da página
     * @var string
     */

    private $uri;

    /**
     * Parâmetros da URL ($_GET)
     * @var array
     */

    private $queryParams = [];

    /**
     * Variáveis recebidas no Post da pádina ($_POST)
     * @var array
     */
    private $postVars = [];

    /**
     * Cabeçalho da requisição
     * @var 
     */

    private $headers = [];

    /**
     * Construtor da classe
     */

    public function __construct()
    {
        $this->queryParams = $_GET ?? [];
        $this->postVars    = $_POST ?? [];
        $this->headers     = getallheaders();
        $this->httpMethod  = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri         = $_SERVER['REQUEST_URI'] ?? '';
    }

    /**
    * Método responsável oir retornar um método HTTP da requisição
    * @return string
    */

    public function getHttpMethod(){
        return $this->httpMethod;
    }

    /**
    * Método responsável oir retornar a URI da requisição
    * @return string
    */

    public function getUri(){
        return $this->uri;
    }

    /**
    * Método responsável oir retornar os headers da requisição
    *  @return array
    */

    public function getHeaders(){
        return $this->headers;
    }
    
      /**
    * Método responsável oir retornar os parâmetros da URL da requisição
    *  @return array
    */

    public function getQueryParams(){
        return $this->queryParams;
    }
    
    /**
    * Método responsável oir retornar as variáveis POST da requisição
    *  @return array
    */

    public function getPostVars(){
        return $this->postVars;
    }
}
