<?php

namespace App\Utils;

class View
{

    /**
     * Variaveis padrões da view
     */
    private static $vars;

    /**
     * Metodo responsavel por definir os dados iniciais da classe
     */
    public static function init($vars = [])
    {
        self::$vars = $vars;
    }

    /**
     * Metrodo responsavel por retornar o conteudo de uma view
     * @param string $view
     * @return string
     */

    private static function getContentView($view)
    {
        $file = __DIR__ . '/../../resources/View/' . $view;
        return file_exists($file) ? file_get_contents($file) : '';
    }


    /**
     * Metrodo responsavel por retornar o conteudo renderizado de uma view
     * @param string $view
     * @param array $vars (strings/numericos)
     * @return string
     */
    public static function render($view, $vars = [])
    {
        // Conteudo da View
        $contentView = self::getContentView($view);

        //MERGE DE VARIAVEIS DA VIEW
        $vars = array_merge(self::$vars, $vars);

        $keys = array_keys($vars);
        $keys = array_map(function ($item) {
            return '{{' . $item . '}}';
        }, $keys);

        // Retorna o conteudo renderizado
        return str_replace($keys, array_values($vars), $contentView);
    }
}
