<?php

namespace App\Http;

class Response
{

    /**
     * Código do Status Http
     */
    private $httpCode = 200;

    /**
     * Cabeçalho do responese
     */
    private $headers = [];

    /**
     * Tipo de conteudo que está sendo retornado
     */
    private $contentType = 'text/html';

    /**
     * Conteudo do Response
     */
    private $content;

    /**
     * Metodo responsavel por iniciar a classe e definir os valores
     * @param integer $httpCode
     * @param mixed $content
     * @param string $contentType
     */

    public function __construct($httpCode, $content, $contentType = 'text/html')
    {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->contentType = $contentType;
        $this->setContentType($contentType);
    }

    /**
     * Metodo responsavel por alterar o contet type do response
     * @param string $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }

    /**
     * Metodo responsavel por alterar o regitro no cabeçalho do response
     * @param string $key
     * @param string $value
     */

    public function addHeader($key, $value)
    {
        $this->headers[$key] = $value;
    }

    /**
     * Metodo resposavel por enviar os headers para o navegador
     */

    private function sendHeaders()
    {
        //Status
        http_response_code($this->httpCode);

        //Enviar HEADERS
        foreach ($this->headers as $key => $value) {
            header($key, $value);
        }
    }

    /**
     * Metodo resposavel por enviar a resposta para o usuario
     */
    public function sendResponse()
    {
        //Envia os HEADERS
        $this->sendHeaders();


        //Imprime o conteudo
        switch ($this->contentType) {
            case 'text/html':
                echo $this->content;
                break;
                exit;
        }
    }
}
