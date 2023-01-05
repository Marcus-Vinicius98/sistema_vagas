<?php

namespace App\Entity;

class Vaga
{
    private $id;
    private $titulo;
    private $descricao;
    private $ativo;
    private $data;

    public function setId($id)
    {
        $this->id = $id;
    }
       public function getId()
    {
        return $this->id;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }
    public function getAtivo()
    {
        return $this->ativo;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
    }




}



?>