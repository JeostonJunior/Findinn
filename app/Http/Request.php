<?php


namespace App\Http;


class Request
{

    /**
     * Metodo http da requisição
     */
    private $httpMethod;

    /**
     * URI da pagina
     */

    private $uri;

    /**
     * Parametros da URL ($_GET)
     */

    private $queryParams = [];

    /**
     * Variaveis recebidas no POST da pagina ($_POST)
     */
    private $postVars = [];

    /**
     * Cabeçalho da requisção
     */
    private $headers = [];

    public function __construct()
    {
        $this->queryParams = $_GET ?? [];
        $this->postVars = $_POST ?? [];
        $this->headers = getallheaders();
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
    }

    /**
     * Metodo responsavel por retornar o método HTTP da requisição
     */
    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    /**
     * Metodo responsavel por retornar a URI da requisição
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Metodo responsavel por retornar os Headers da requisição
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Metodo responsavel por retornar o QueryParams da requisição
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * Metodo responsavel por retornar o PostVars da requisição
     */
    public function getPostVars()
    {
        return $this->postVars;
    }
}
