<?php 

require_once("../../Model/ManagerRemedio.class.php");
require_once("../../Model/Conexao.class.php");

$controller = new DeleteRemedioController();
$controller->DeletarRemedio($_POST);

class DeleteRemedioController{

    private $remedioDAO;
    public function __construct(){
        $this->remedioDAO = new RemediosDAOImpl();
    }
    
    public function DeletarRemedio($id){

       $remedio = new Remedio();
       $remedio->Id = $id['id'] ?? '';
       
       $this->remedioDAO->deleteRemedio($remedio);

       header("Location: ../../View/verRemedios.php?cod=1");
       exit();

    }
}

?>