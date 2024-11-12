<?php

class Remedio{

    public $Id;
    public $Nome;
    public $Horario;
    public $Data;

    // Get
    public function getId(){
        return $this -> Id;
    }

    public function getNome(){
        return $this -> Nome;
    }

    public function getHorario(){
        return $this -> Horario;
    }

    public function getData(){
        return $this -> Data;
    }

    // Set
    public function setId($Id){
        $this->Id = $Id;
    }
    public function setNome($Nome){
        $this->Nome = $Nome;
    }
    public function setHorario($Horario){
        $this->Horario = $Horario;
    }
    public function setData($Data){
        $this->Data = $Data;
    }
}


?>