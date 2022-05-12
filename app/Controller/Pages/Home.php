<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;


class Home extends Page
{
    /**
     * Metodo responsavel por retornar o conteudo (view) da nossa home
     */

    public static function getHome()
    {

        $obOrganization = new Organization;

        // Recebe uma requisição e retorna a view
        $content = View::render('Pages/home.html', [
            'city' => $obOrganization->city,
            'cardText' => $obOrganization->cardText,
        ]);
        return parent::getPage('FINDINN - HOME PAGE', '<link rel="stylesheet" href="resources/View/Pages/style.css" type="text/css" />', $content);
    }
}
