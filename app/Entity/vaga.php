<?php

namespace App\Entity;
  
   use \App\Db\Database;

class Vaga
{
    /**
     *Identificador único da vaga
     * @var integer
     */
    private $id;
    /**
     *Titulo da vaga
     * @var String
     */
    private $titulo;
    /**
     *Descrição da vaga(pode conter html)
     * @var String
     */
    private $descricao;
    /**
     *Define se a vaga está ativa
     * @var String(s/n)
     */
    private $ativo;
    /**
     *Data de publicação da vaga
     * @var String
     */
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


    /**
     * Método resposável por cadastrar uma nova vaga no banco
     * @return boolean
     */
    public function cadastrar(){
        //Definir a data
        $this->data = date('Y-m-d H:i:s');
        //Inserir a vaga no banco


    }




}



?>