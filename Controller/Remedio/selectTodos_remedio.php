<?php 

include '.../Model/MenagerRemedio.class.php';
include '.../Model/Conexao.class.php';

$RemediosDAOImple = new RemediosDAOImple();



    $RemediosDAOImple->getTodosRemedios();
    header("Location: .../view/verRemedios.php?cod=1");

?>