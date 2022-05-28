<?php

namespace App\Model;

class Anuncio
{

    private $imovel;
    private $incioAnuncio;
    private $fimAnuncio;
    private $valorAnuncio;

    public function __construct(Imovel $imovel, string $incioAnuncio, string $fimAnuncio, float $valorAnuncio)
    {
        $this->imovel = $imovel;
        $this->incioAnuncio = $incioAnuncio;
        $this->fimAnuncio = $fimAnuncio;
        $this->valorAnuncio = $valorAnuncio;
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
     * Get the value of incioAnuncio
     */
    public function getIncioAnuncio()
    {
        return $this->incioAnuncio;
    }

    /**
     * Set the value of incioAnuncio
     *
     * @return  self
     */
    public function setIncioAnuncio($incioAnuncio)
    {
        $this->incioAnuncio = $incioAnuncio;

        return $this;
    }

    /**
     * Get the value of fimAnuncio
     */
    public function getFimAnuncio()
    {
        return $this->fimAnuncio;
    }

    /**
     * Set the value of fimAnuncio
     *
     * @return  self
     */
    public function setFimAnuncio($fimAnuncio)
    {
        $this->fimAnuncio = $fimAnuncio;

        return $this;
    }

    /**
     * Get the value of valorAnuncio
     */
    public function getValorAnuncio()
    {
        return $this->valorAnuncio;
    }

    /**
     * Set the value of valorAnuncio
     *
     * @return  self
     */
    public function setValorAnuncio($valorAnuncio)
    {
        $this->valorAnuncio = $valorAnuncio;

        return $this;
    }
}
