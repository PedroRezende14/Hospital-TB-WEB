<?php

class Medico
{

    private int $id;
    private string $nome;
    private string $cpf;
    private string $especialidade;
    private string $faculdade;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setNome($string)
    {
        $this->nome = $string;
    }

    public function setCpf($string)
    {
        $this->cpf = $string;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }


    public function setEspecialidade($string)
    {
        $this->especialidade = $string;
    }
    public function setFaculdade($string)
    {
        $this->faculdade = $string;
    }

    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function getFaculdade()
    {
        return $this->faculdade;
    }



}
?>