<?php

class Remedio{

    private $Id;
    private $Nome;
    private $Horario;
    private $Data;

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
}


?>