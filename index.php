<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Http\Router;
use \App\Utils\View;

define('URL', 'http://localhost/findinn');

//DEFINE O VALOR PADRÃO DAS VARIAVEIS
View::init([
    'URL' => URL
]);

$obRouter = new Router(URL);

//INCLUI AS ROTAS DE PAGINAS
include __DIR__ . '/routes/pages.php';

//Imprime o response da rota
$obRouter->run()->sendResponse();
