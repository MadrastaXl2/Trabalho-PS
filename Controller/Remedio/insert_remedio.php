<?php 

include 'Conexao.class.php';
include 'ManagerRemedio.class.php';


$RemediosDAOImple = new RemediosDAOImple();


if (!empty($_POST)){
    $RemediosDAOImple->insertRemedios($_POST);
    header("Location: ../View/InsereRemedio.php?cod=1");
}


?>