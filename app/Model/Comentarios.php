<?php

namespace App\Model;

class Comentario
{
    private $cometario;
    private $imovel;
    private $locatario;

    public function __construct(string $comentario, Imovel $imovel, Locatario $locatario)
    {
        $this->cometario = $comentario;
        $this->imovel = $imovel;
        $this->locatario = $locatario;
    }

    /**
     * Get the value of cometario
     */
    public function getCometario()
    {
        return $this->cometario;
    }

    /**
     * Set the value of cometario
     *
     * @return  self
     */
    public function setCometario($cometario)
    {
        $this->cometario = $cometario;

        return $this;
    }

    /**
     * Get the value of imovel
     */
    public function getImovel(): Imovel
    {
        return $this->imovel;
    }

    /**
     * Set the value of imovel
     *
     * @return  self
     */
    public function setImovel(Imovel $imovel)
    {
        $this->imovel = $imovel;

        return $this;
    }

    /**
     * Get the value of locatario
     */
    public function getLocatario(): Locatario
    {
        return $this->locatario;
    }

    /**
     * Set the value of locatario
     *
     * @return  self
     */
    public function setLocatario(Locatario $locatario)
    {
        $this->locatario = $locatario;

        return $this;
    }
}
