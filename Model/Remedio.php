<?php

class Remedio{

    private $Id;
    private $Nome;
    private $Horario;
    private $Data;

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

    public function __construct(string $Nome, string $Horario, string $Data)
    {
        $this->Nome = $Nome; 
        $this->Horario = $Horario;
        $this->Data = $Data;
    }
}


?>