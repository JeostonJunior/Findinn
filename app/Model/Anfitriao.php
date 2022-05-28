<?php

namespace App\Model;

class Anfitriao extends Usuario
{
    private $dadosCartao;
    private $acomodacoes;

    public function __construct(Usuario $anfitriao, Cartao $dadosCartao, array $acomodacoes)
    {
        parent::__construct($anfitriao->nome, $anfitriao->cpf, $anfitriao->tel, $anfitriao->senha, $anfitriao->email, $anfitriao->pais);

        $this->dadosCartao = $dadosCartao;
        $this->acomodacoes = $acomodacoes;
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
     * Get the value of acomodacoes
     */
    public function getacomodacoes()
    {
        return $this->acomodacoes;
    }

    /**
     * Set the value of acomodacoes
     *
     * @return  self
     */
    public function setacomodacoes($acomodacoes)
    {
        $this->acomodacoes = $acomodacoes;

        return $this;
    }
}
