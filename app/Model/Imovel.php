<?php

namespace App\Model;


class Imovel
{
    private $anfitriao;
    private $cep;
    private $rua;
    private $numero;
    private $cidade;
    private $estado;
    private $complemento;
    private $diaria;
    private $tipoImovel;
    private $adicionaisImovel;
    private $capacidadeMaxima;
    private $descricao;
    private $imagens;

    function __construct(Usuario $anfitriao, string $cep, string $rua, string $numero, string $cidade, string $estado, string $complemento, string $diaria, TipoImovel $tipoImovel, AdicionaisImovel $adicionaisImovel, string $imagens, int $capacidadeMaxima, string $descricao)
    {
        $this->anfitriao = $anfitriao;
        $this->cep = $cep;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->complemento = $complemento;
        $this->diaria = $diaria;
        $this->tipoImovel = $tipoImovel;
        $this->dadicionaisImovel = $adicionaisImovel;
        $this->imagens = $imagens;
        $this->capacidadeMaxima = $capacidadeMaxima;
        $this->descricao = $descricao;
    }

    /**
     * Get the value of anfitriao
     */
    public function getAnfitriao(): Usuario
    {
        return $this->anfitriao;
    }

    /**
     * Set the value of anfitriao
     *
     * @return  self
     */
    public function setAnfitriao(Usuario $anfitriao)
    {
        $this->anfitriao = $anfitriao;

        return $this;
    }

    /**
     * Get the value of cep
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set the value of cep
     *
     * @return  self
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get the value of rua
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Set the value of rua
     *
     * @return  self
     */
    public function setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     *
     * @return  self
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of complemento
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set the value of complemento
     *
     * @return  self
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get the value of diaria
     */
    public function getDiaria()
    {
        return $this->diaria;
    }

    /**
     * Set the value of diaria
     *
     * @return  self
     */
    public function setDiaria($diaria)
    {
        $this->diaria = $diaria;

        return $this;
    }

    /**
     * Get the value of tipoImovel
     */
    public function getTipoImovel(): TipoImovel
    {
        return $this->tipoImovel;
    }

    /**
     * Set the value of tipoImovel
     *
     * @return  self
     */
    public function setTipoImovel(TipoImovel $tipoImovel)
    {
        $this->tipoImovel = $tipoImovel;

        return $this;
    }

    /**
     * Get the value of imagens
     */
    public function getImagens()
    {
        return $this->imagens;
    }

    /**
     * Set the value of imagens
     *
     * @return  self
     */
    public function setImagens($imagens)
    {
        $this->imagens = $imagens;

        return $this;
    }

    /**
     * Get the value of adicionaisImovel
     */
    public function getAdicionaisImovel(): AdicionaisImovel
    {
        return $this->adicionaisImovel;
    }

    /**
     * Set the value of adicionaisImovel
     *
     * @return  self
     */
    public function setAdicionaisImovel(AdicionaisImovel $adicionaisImovel)
    {
        $this->adicionaisImovel = $adicionaisImovel;

        return $this;
    }

    /**
     * Get the value of capacidadeMaxima
     */
    public function getCapacidadeMaxima()
    {
        return $this->capacidadeMaxima;
    }

    /**
     * Set the value of capacidadeMaxima
     *
     * @return  self
     */
    public function setCapacidadeMaxima($capacidadeMaxima)
    {
        $this->capacidadeMaxima = $capacidadeMaxima;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }
}
