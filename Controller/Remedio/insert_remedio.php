<?php 

include '.../Model/ManagerRemedio.class.php';
include '.../Model/Conexao.class.php';

$RemediosDAOImple = new RemediosDAOImple();


if (!empty($_POST)) {
    $RemediosDAOImple->insertRemedios($_POST);
    header("Location: .../view/InsereRemedio.php?cod=1");
}

?>