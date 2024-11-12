<?php 

require_once("../../Model/ManagerRemedio.class.php");
require_once("../../Model/Conexao.class.php");


   $controller = new DeleteRemedioController();
    $controller->DeletarRemedio($_POST);

if(isset($_POST['submit'])){
    $controller = new DeleteRemedioController();
    $controller->DeletarRemedio($_POST);
}



class DeleteRemedioController{

    private $remedioDAO;
    public function __construct(){
        $this->remedioDAO = new RemediosDAOImpl();
    }
    
    public function DeletarRemedio($dados){

       $remedio = new Remedio();
       $remedio->Id = $dados['id'] ?? '';
      

       $this->remedioDAO->insertRemedios($remedio);

       header("Location: ../../View/VerRemedio.php?cod=3");
       exit();

    }
}

?>