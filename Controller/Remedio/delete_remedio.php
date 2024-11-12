<?php 

require_once("../../Model/ManagerRemedio.class.php");
require_once("../../Model/Conexao.class.php");

<<<<<<< HEAD
$RemediosDAOImple = new RemediosDAOImpl();
=======
if(isset($_POST['submit'])){
    $controller = new DeleteRemedioController();
    $controller->DeletarRemedio($_POST);
}
>>>>>>> 0b8fc6ac8fcd5a4117f32b9b1729dfa1d92085c1


<<<<<<< HEAD
if (isset($id) && !empty($id)){
    $RemediosDAOImple->deleteRemedio($_POST);
    header("Location: ../../view/verRemedios.php?cod=1");
=======
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
>>>>>>> 0b8fc6ac8fcd5a4117f32b9b1729dfa1d92085c1
}

?>