<?php

require_once ('../../Model/ManagerRemedio.class.php');
require_once ('../../Model/Conexao.class.php');

if(isset($_POST['submit'])){
    $controller = new UpdateRemedioController();
    $controller->updateRemedio($_POST);
}

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

       header("Location: ../../View/verRemedios.php?cod=1");
       exit();

    }
   
}

?>