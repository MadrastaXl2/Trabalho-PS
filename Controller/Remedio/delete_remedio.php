<?php 

include '.../Model/MenagerRemedio.class.php';
include '.../Model/Conexao.class.php';

$RemediosDAOImple = new RemediosDAOImple();

$id = $_POST['id'];

if (isset($id) && !empty($id)){
    $RemediosDAOImple->deleteRemedio($_POST);
    header("Location: .../view/DeletaRemedio.php?cod=1");
}

?>