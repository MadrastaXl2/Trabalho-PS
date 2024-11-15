<?php 

require_once("../../Model/ManagerRemedio.class.php");
require_once("../../Model/Conexao.class.php");

if (isset($_POST['submit'])) {
    $controller = new DeleteRemedioController();
    $controller->DeletarRemedio($_POST);
}

class DeleteRemedioController {

    private $remedioDAO;

    public function __construct() {
        $this->remedioDAO = new RemediosDAOImpl();
    }
    
    public function DeletarRemedio($dados) {
        if (empty($dados['id'])) {
            echo "Erro: ID não fornecido.";
            exit;
        }

        $remedio = new Remedio();
        $remedio->Id = $dados['id'];

        $this->remedioDAO->deleteRemedio($remedio);

        // Redireciona para a página de visualização
        header("Location: ../../View/VerRemedios.php?cod=3");
        exit();
    }
}
?>
