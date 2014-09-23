<?php

class Cliente
{
    private $nome;
    private $cpf;
    private $rg;
    private $data_nascimento;
    private $email;
    private $celular;
    private $fixo;
    private $endereco;
    private $estado;
    private $cep;
    private $cidade;
    private $bairro;

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
        return $this;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
        return $this;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
        return $this;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
        return $this;
    }

    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setFixo($fixo)
    {
        $this->fixo = $fixo;
        return $this;
    }

    public function getFixo()
    {
        return $this->fixo;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;
        return $this;
    }

    public function getRg()
    {
        return $this->rg;
    }

    public function toString(){
        echo "NOME: ".$this->getNome()."<br>";
        echo "CPF: ".$this->getCpf()."<br>";
        echo "RG: ".$this->getRg()."<br>";
        echo "DT. NASC: ".$this->getDataNascimento()."<br>";
        echo "EMAIL: ".$this->getEmail()."<br>";
        echo "CELULAR: ".$this->getCelular()."<br>";
        echo "FIXO: ".$this->getFixo()."<br>";
        echo "ENDERECO: ".$this->getEndereco()."<br>";
        echo "UF: ".$this->getEstado()."<br>";
        echo "CEP: ".$this->getCep()."<br>";
        echo "CIDADE: ".$this->getCidade()."<br>";
        echo "BAIRRO: ".$this->getBairro()."<br>";
    }

} 