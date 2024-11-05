<?php 

include '.../Model/ManagerRemedio.class.php';
include '.../Model/Conexao.class.php';

class InsertRemedioController{


    public function Inserer($_POST){

        $RemediosDAOImple = new RemediosDAOImple();
        $Remedio = new Remedio($_POST["nome"], $_POST["horario"], $_POST["data"]);

        

        if (!empty($Remedio)) {
            $RemediosDAOImple->insertRemedios($Remedio);
            header("Location: .../view/InsereRemedio.php?cod=1");
        }
    }
   
}


?>