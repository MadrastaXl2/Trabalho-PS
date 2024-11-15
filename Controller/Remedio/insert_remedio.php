<?php 

require_once ("../../Model/ManagerRemedio.class.php");
require_once ("../../Model/Conexao.class.php");

if(isset($_POST['submit'])){
    $controller = new InsertRemedioController();
    $controller->inserirRemedio($_POST);
}
class InsertRemedioController{

    private $remedioDAO;
    public function __construct(){
        $this->remedioDAO = new RemediosDAOImpl();
    }
    
    public function inserirRemedio($dados){

       $remedio = new Remedio();
       $remedio->Nome = $dados['nome'] ?? '';
       $remedio->Horario = $dados['horario'] ?? '';
       $remedio->Data = $dados['data'] ?? '';

       $this->remedioDAO->insertRemedios($remedio);

       header("Location: ../../View/InsereRemedio.php?cod=1");
       exit();

    }

   
}


?>