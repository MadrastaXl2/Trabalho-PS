<?php 

include '.../Model/MenagerRemedio.class.php';
include '.../Model/Conexao.class.php';

$RemediosDAOImple = new RemediosDAOImple();


if (!empty($_POST)) {
    $RemediosDAOImple->getTodosRemedios($_POST);
    header("Location: .../view/verRemedios.php?cod=1");
}

?>