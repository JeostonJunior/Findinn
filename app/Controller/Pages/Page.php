<?php

namespace App\Controller\Pages;

use \App\Utils\View;


class Page
{

    /**
     * Metodo responsavel por retornar o conteudo (view) da nossa home
     */

    private static function getFooter()
    {
        return View::render('Pages/footer.html');
    }

    public static function getPage($title, $link, $content)
    {
        // Recebe uma requisição e retorna a view
        return View::render('Pages/page.html', [
            'title' => $title,
            'link' => $link,
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }
}
