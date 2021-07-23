<?php

class Usuario {

    private $idusuario;
    private $nome;
    private $sobrenome;

    public function getIdusuario(){
        return $this->idusuario;
    }

    public function setIdusuario($value){
        $this->idusuario = $value;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($value){
        $this->nome = $value;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function setSobrenome($value){
        $this->sobrenome = $value;
    }

    public function loadById($id){
        $sql = new Sql();

        $results = $sql->select("SELECT *FROM usuario WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));

        if (isset($results[0])) {

            $row = $results[0];

            $this->setIdusuario($row['idusuario']);
            $this->setNome($row['nome']);
            $this->setSobrenome($row['sobrenome']);

        }
    }

    public function __toString()
    {
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "nome"=>$this->getNome(),
            "sobrenome"=>$this->getSobrenome()

        ));
    }
}