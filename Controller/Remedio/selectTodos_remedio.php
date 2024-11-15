<?php 

require_once("../../Model/ManagerRemedio.class.php");
require_once("../../Model/Conexao.class.php");

$RemediosDAOImple = new RemediosDAOImpl();

    $RemediosDAOImple->getTodosRemedios();
    header("Location: .../view/verRemedios.php?cod=1");

?>