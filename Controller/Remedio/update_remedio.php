<?php

include '.../Model/MenagerRemedio.class.php';
include '.../Model/Conexao.class.php';

class UpdateRemedioController{

    private $remedioDAO;
    public function __construct(){
        $this->remedioDAO = new RemediosDAOImpl();
    }
    
    public function updateRemedio($dados){

       $remedio = new Remedio();
       $remedio->Nome = $dados['nome'] ?? '';
       $remedio->Horario = $dados['horario'] ?? '';
       $remedio->Data = $dados['data'] ?? '';

       $this->remedioDAO->updateRemedio($remedio);

       header("Location: .../view/AlteraRemedio.php?cod=1");
       exit();

    }
   
}

?>