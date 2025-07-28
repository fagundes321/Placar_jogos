<?php

namespace App\Http;

class Response
{

    /**
     * codigo do status HTTP
     * @var integer
     */
    private $httpCode = 200;

    /**
     * cabeçalho do RESPONSE
     * @var array
     */
    private $headers = [];

    /**
     * Tipo de conteúdo que está sendo
     * @var string
     */
    private $contentType = 'text/html';

    /**
     * Conteudo do Response
     * @var mixed
     */
    private $content;

    /**
     * Método responsável por iniciar a classe e definir os valores
     * @param integer $httpcode
     * @param mixed   $content
     * @param string  $contentType
     */

    public function __construct($httpCode, $content, $contentType = 'text/html')
    {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->contentType = $contentType;
    }

    /**
     * metodo responsável por alterar o content type do response 
     * @param string $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }

    /**
     * método responsável por adicionar um registro no cabeçalho de response
     * @param string
     * @param string
     */

    public function addHeader($key, $value)
    {
        $this->headers[$key] = $value;
    }

    private function sendHeaders(){
        //STATUS
        http_response_code($this->httpCode);

        // enviar headers

        foreach($this->headers as $key=>$value){
            header($key.': '.$value);
        }
    }

    /**
     * Método responsavel  por enviar a resposta para o usuário
     */
    public function sedResponse()
    {
        $this->sendHeaders();

        switch ($this->contentType) {
            case 'text/html':
                echo $this->content;
                exit;
        }
    }
}
