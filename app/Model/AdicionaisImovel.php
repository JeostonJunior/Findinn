<?php

namespace App\Model;


class AdicionaisImovel
{

    private $cozinha;
    private $jacuzzi;
    private $refrigerador;
    private $camera;
    private $detectorFumaca;
    private $wifi;
    private $arCondicionado;
    private $alarmeIncendio;
    private $garagem;

    public function __construct(
        bool $cozinha = false,
        bool $jacuzzi = false,
        bool $refrigerador = false,
        bool $arCondicionado = false,
        bool $camera = false,
        bool $detectorFumaca = false,
        bool $wifi = false,
        bool $alarmeIncendio = false,
        bool $garagem = false
    ) {
        $this->cozinha = $cozinha;
        $this->jacuzzi = $jacuzzi;
        $this->refrigerador = $refrigerador;
        $this->arCondicionado = $arCondicionado;
        $this->camera = $camera;
        $this->detectorFumaca = $detectorFumaca;
        $this->wifi = $wifi;
        $this->alarmeIncendio = $alarmeIncendio;
        $this->garagem = $garagem;
    }

    /**
     * Get the value of cozinha
     */
    public function getCozinha()
    {
        return $this->cozinha;
    }

    /**
     * Set the value of cozinha
     *
     * @return  self
     */
    public function setCozinha($cozinha)
    {
        $this->cozinha = $cozinha;

        return $this;
    }

    /**
     * Get the value of jacuzzi
     */
    public function getJacuzzi()
    {
        return $this->jacuzzi;
    }

    /**
     * Set the value of jacuzzi
     *
     * @return  self
     */
    public function setJacuzzi($jacuzzi)
    {
        $this->jacuzzi = $jacuzzi;

        return $this;
    }

    /**
     * Get the value of refrigerador
     */
    public function getRefrigerador()
    {
        return $this->refrigerador;
    }

    /**
     * Set the value of refrigerador
     *
     * @return  self
     */
    public function setRefrigerador($refrigerador)
    {
        $this->refrigerador = $refrigerador;

        return $this;
    }

    /**
     * Get the value of camera
     */
    public function getCamera()
    {
        return $this->camera;
    }

    /**
     * Set the value of camera
     *
     * @return  self
     */
    public function setCamera($camera)
    {
        $this->camera = $camera;

        return $this;
    }

    /**
     * Get the value of detectorFumaca
     */
    public function getDetectorFumaca()
    {
        return $this->detectorFumaca;
    }

    /**
     * Set the value of detectorFumaca
     *
     * @return  self
     */
    public function setDetectorFumaca($detectorFumaca)
    {
        $this->detectorFumaca = $detectorFumaca;

        return $this;
    }

    /**
     * Get the value of wifi
     */
    public function getWifi()
    {
        return $this->wifi;
    }

    /**
     * Set the value of wifi
     *
     * @return  self
     */
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    /**
     * Get the value of arCondicionado
     */
    public function getArCondicionado()
    {
        return $this->arCondicionado;
    }

    /**
     * Set the value of arCondicionado
     *
     * @return  self
     */
    public function setArCondicionado($arCondicionado)
    {
        $this->arCondicionado = $arCondicionado;

        return $this;
    }

    /**
     * Get the value of alarmeIncendio
     */
    public function getAlarmeIncendio()
    {
        return $this->alarmeIncendio;
    }

    /**
     * Set the value of alarmeIncendio
     *
     * @return  self
     */
    public function setAlarmeIncendio($alarmeIncendio)
    {
        $this->alarmeIncendio = $alarmeIncendio;

        return $this;
    }

    /**
     * Get the value of garagem
     */
    public function getGaragem()
    {
        return $this->garagem;
    }

    /**
     * Set the value of garagem
     *
     * @return  self
     */
    public function setGaragem($garagem)
    {
        $this->garagem = $garagem;

        return $this;
    }
}
