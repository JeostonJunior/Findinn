<?php

namespace App\Model;

class Locatario extends Usuario
{

    private $dadosCartao;
    private $locacoes;
    private $comentarios;


    public function __construct(Usuario $locatario, Cartao $dadosCartao, array $locacoes, array $comentarios)
    {
        parent::__construct($locatario->nome, $locatario->cpf, $locatario->tel, $locatario->senha, $locatario->email, $locatario->pais);

        $this->dadosCartao = $dadosCartao;
        $this->locacoes = $locacoes;
        $this->comentarios = $comentarios;
    }

    /**
     * Get the value of dadosCartao
     */
    public function getDadosCartao(): Cartao
    {
        return $this->dadosCartao;
    }

    /**
     * Set the value of dadosCartao
     *
     * @return  self
     */
    public function setDadosCartao(Cartao $dadosCartao)
    {
        $this->dadosCartao = $dadosCartao;

        return $this;
    }

    /**
     * Get the value of locacoes
     */
    public function getlocacoes()
    {
        return $this->locacoes;
    }

    /**
     * Set the value of locacoes
     *
     * @return  self
     */
    public function setlocacoes($locacoes)
    {
        $this->locacoes = $locacoes;

        return $this;
    }

    /**
     * Get the value of comentarios
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set the value of comentarios
     *
     * @return  self
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }
}
