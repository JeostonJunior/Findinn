<?php

namespace App\Model;

class Cartao
{
    private $titularCartao;
    private $numCartao;
    private $dataValidade;
    private $cvv;

    public function __construct(Usuario $titularCartao, string $numCartao, string $dataValidade, string $cvv)
    {
        $this->$titularCartao = $titularCartao;
        $this->$numCartao = $numCartao;
        $this->$dataValidade = $dataValidade;
        $this->$cvv = $cvv;
    }


    /**
     * Get the value of titularCartao
     */
    public function getTitularCartao(): Usuario
    {
        return $this->titularCartao;
    }

    /**
     * Set the value of titularCartao
     *
     * @return  self
     */
    public function setTitularCartao(Usuario $titularCartao)
    {
        $this->titularCartao = $titularCartao;

        return $this;
    }

    /**
     * Get the value of numCartao
     */
    public function getNumCartao()
    {
        return $this->numCartao;
    }

    /**
     * Set the value of numCartao
     *
     * @return  self
     */
    public function setNumCartao($numCartao)
    {
        $this->numCartao = $numCartao;

        return $this;
    }

    /**
     * Get the value of dataValidade
     */
    public function getDataValidade()
    {
        return $this->dataValidade;
    }

    /**
     * Set the value of dataValidade
     *
     * @return  self
     */
    public function setDataValidade($dataValidade)
    {
        $this->dataValidade = $dataValidade;

        return $this;
    }

    /**
     * Get the value of cvv
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }
}
