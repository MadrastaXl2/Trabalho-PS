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

    // set

    public function setId($Id){
        $this->Id = $Id;
    }

    public function setNome($Nome){
        $this->Nome = $Nome;
    }
    
    public function setEmail($Email){
        $this->Email = $Email;
    }

    public function setSenha($Senha){
        $this->Senha = $Senha;
    }

    public function setIdade($Idade){
        $this->Idade = $Idade;
    }

    public function setSexo($Sexo){
        $this->Sexo = $Sexo;
    }

}


?>