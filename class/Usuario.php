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

            $this->setData($results [0]);

        }
    }

    public static function getList(){

        $sql = new Sql();

        return $sql->select("SELECT * FROM usuario;");
    }

    public function setData($data){

        $this->setIdusuario($data['idusuario']);
        $this->setNome($data['nome']);
        $this->setSobrenome($data['sobrenome']);

    }

    public function insert(){

        $sql = new Sql();
    
        $results = $sql->select("CALL sp_usuario_insert(:NOME, :SOBRENOME)", array(
            ':NOME'=>$this->getNome(),
            ':SOBRENOME'=>$this->getSobrenome()
        ));
       
        if(count($results) > 0){
            $this->setData($results[0]);
        }
        return $results;
    }

    public function update($nome, $sobrenome){

        $this->setNome($nome);
        $this->setSobrenome($sobrenome);

        $sql = new Sql();

        $sql->query("UPDATE usuario SET nome = :NOME, sobrenome = :SOBRENOME WHERE idusuario = :ID", array(
            ':NOME'=>$this->getNome(),
            ':SOBRENOME'=>$this->getSobrenome(),
            ':ID'=>$this->getIdusuario()
        ));

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