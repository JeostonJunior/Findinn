<?php


namespace App\Model;



class TipoImovel
{

    private $tipo;



    public function __construct(string $tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }
}
