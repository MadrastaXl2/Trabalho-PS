<?php

class Usuario{

    private $Id;
    private $Nome;
    private $Email;
    private $Senha;
    private $Idade;
    private $Sexo;

    public function getId(){
        return $this ->Id;
    }

    public function getNome(){
        return $this ->Nome;
    }

    public function getEmail(){
        return $this -> Email;
    }

    public function getSenha(){
        return $this -> Senha;
    }

    public function getIdade(){
        return $this -> Idade;
    }

    public function getSexo(){
        return $this -> Sexo;
    }

}


?>