<?php

class Usuario{

    private $Id;
    private $Nome;
    private $Sexo;
    private $Historico_medico;

    public function getId(){
        return $this -> id;
    }

    public function getNome(){
        return $this -> nome;
    }

    public function getSexo(){
        return $this -> sexo;
    }

    public function getHistorico_medico(){
        return $this -> Historico_medico;
    }
}


?>