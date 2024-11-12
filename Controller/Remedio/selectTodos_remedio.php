<?php 

include '.../Model/ManagerRemedio.class.php';
include '.../Model/Conexao.class.php';

$RemediosDAOImple = new RemediosDAOImpl();

    $RemediosDAOImple->getTodosRemedios();
    header("Location: .../view/verRemedios.php?cod=1");

?>