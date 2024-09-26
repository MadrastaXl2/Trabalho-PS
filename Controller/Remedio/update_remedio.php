<?php

include '.../Model/MenagerRemedio.class.php';
include '.../Model/Conexao.class.php';

$RemediosDAOImple = new RemediosDAOImple();

var_dump($_POST);
if (!empty($_POST)) {
    $RemediosDAOImple->updateRemedio($_POST);
    header("Location: .../view/AlteraRemedio.php?cod=1");
}

?>