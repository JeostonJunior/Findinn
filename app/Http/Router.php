<?php


namespace App\Http;

use \Closure;
use \Exception;
use \ReflectionFunction;

class Router
{
    /**
     * URL completa do prjeto (raiz)
     * @var string 
     */
    private $url = '';

    /**
     * Prefixo de todas rotas
     */
    private $prefix = '';

    /**
     * indice de rotas
     * @var array
     */
    private $routes = [];

    /**
     * Instancia de Request
     * @var Request
     */
    private $request;

    /**
     * Metodo responsavel por iniciar a classe
     */

    public function __construct($url)
    {
        $this->request = new Request();
        $this->url = $url;
        $this->setPrefix();
    }

    /**
     * Metodo responsavel por definir o prefixo das rotas
     */
    private function setPrefix()
    {
        //Informações da url atual
        $parseUrl = parse_url($this->url);

        //Define o prefixo
        $this->prefix = $parseUrl['path']  ?? '';
    }

    /**
     * Metodo responsavel por adcionar uma rota na classe
     */
    private function addRoute($method, $route, $params = [])
    {
        //Validação dos parametros
        foreach ($params as $key => $value) {
            if ($value instanceof Closure) {
                $params['controller'] = $value;
                unset($params[$key]);
                continue;
            }
        }

        //VARIAVEIS DA ROTA
        $params['variables'] = [];

        //PADÃO DE VALIDAÇÃO DAS VARIAVEIS DAS ROTAS
        $patternVariables = '/{(.*?)}/';
        if (preg_match_all($patternVariables, $route, $matches)) {
            $route = preg_replace($patternVariables, '(.*?)', $route);
            $params['variables'] = $matches[1];
        }

        //padrao de validacao da url
        $patternRoute = '/^' . str_replace('/', '\/', $route) . '$/';

        //adiciona a rota dentro da classe
        $this->routes[$patternRoute][$method] = $params;
    }


    /**
     * Metodo responsavel por definir uma rota de GET
     * @param string $route
     * @param array $params
     */
    public function get($route, $params = [])
    {
        return $this->addRoute('GET', $route, $params);
    }

    /**
     * Metodo responsavel por definir uma rota de POST
     * @param string $route
     * @param array $params
     */
    public function post($route, $params = [])
    {
        return $this->addRoute('POST', $route, $params);
    }

    /**
     * Metodo responsavel por definir uma rota de PUT
     * @param string $route
     * @param array $params
     */
    public function put($route, $params = [])
    {
        return $this->addRoute('PUT', $route, $params);
    }


    /**
     * Metodo responsavel por definir uma rota de DELETE
     * @param string $route
     * @param array $params
     */
    public function delete($route, $params = [])
    {
        return $this->addRoute('DELETE', $route, $params);
    }



    /**
     * Metodo Responsavel por retornar a URI desconsiderando o prefixo
     */
    private function getUri()
    {
        //URI da request
        $uri = $this->request->getUri();

        //fatia a uri com o prefixo
        $xUri = strlen($this->prefix) ? explode($this->prefix, $uri) : [$uri];

        //retorna a URI sem pefixo
        return end($xUri);
    }


    /**
     * Metodo responsavel por retornar os dados da rota atual
     */
    private function getRoute()
    {
        //URI
        $uri = $this->getUri();

        //METHOD
        $httpMethod = $this->request->getHttpMethod();

        //valida as Rotas
        foreach ($this->routes as $patternRoute => $methods) {
            //Verifica se a uri bate com o padrão
            if (preg_match($patternRoute, $uri, $matches)) {
                //Verifica o method
                if (isset($methods[$httpMethod])) {
                    unset($matches[0]);

                    //chaves das variaveis
                    $keys = $methods[$httpMethod]['variables'];
                    $methods[$httpMethod]['variables'] = array_combine($keys, $matches);
                    $methods[$httpMethod]['variables']['request'] = $this->request;

                    //retorno dos parametros das rotas
                    return $methods[$httpMethod];
                }
                //Metodo não permitido definido
                throw new Exception("Método não permitido", 405);
            }
        }
        //Url não encontrada
        throw new Exception("URL não encontrada", 404);
    }


    /**
     * Metodo para execução do genrenciador de rotas
     * @return Response
     */

    public function run()
    {
        try {
            $route = $this->getRoute();

            //verifica o controlador
            if (!isset($route['controller'])) {
                throw new Exception("A url não pôde ser processada", 500);
            }

            //argumentos da função
            $args = [];


            //REFLETION FUNCTION
            $refletion = new ReflectionFunction($route['controller']);
            foreach ($refletion->getParameters() as $parameter) {
                $name = $parameter->getName();
                $args[$name] = $route['variables'][$name] ?? '';
            }

            //retorna a execução da função
            return call_user_func_array($route['controller'], $args);
        } catch (Exception $e) {
            return new Response($e->getCode(), $e->getMessage());
        }
    }
}
