<?php

namespace App\Controller\Pages;

use \App\Utils\View;


class HostLogin extends Page
{
    /**
     * Metodo responsavel por retornar o conteudo (view) da nossa pagina de HostLogin
     */

    public static function getHostLogin()
    {

        // Recebe uma requisição e retorna a view
        $content = View::render('Pages/hostLogin.html', []);
        return parent::getPage('FINDINN - HOST LOGIN', '<link rel="stylesheet" href="resources/View/Pages/host.css" type="text/css" />', $content);
    }
}
