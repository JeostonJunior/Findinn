<?php

namespace App\Model;

class Usuario
{
    private $nome;
    private $cpf;
    private $tel;
    private $senha;
    private $email;
    private $pais;

    function __construct(string $nome, string $cpf, string $tel, string $senha, string $email, string $pais)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->tel = $tel;
        $this->senha = $senha;
        $this->email = $email;
        $this->pais = $pais;
    }

    /**
     * Get the value of nome
     */
    public function getnome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setnome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of tel
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getsenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */
    public function setsenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of pais
     */
    public function getpais()
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */
    public function setpais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }
}
