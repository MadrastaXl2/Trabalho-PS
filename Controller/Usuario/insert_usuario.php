<?php

include '../Model/Conexao.class.php';
include '../Model/ManagerUsuario.class.php';


$UsuarioDAOimpl = new UsuarioDAOimpl();

if (!empty($_POST)) {
    $UsuarioDAOimpl->insertUsuario($_POST);
    header("Location: ../View/InsereUsuario.php?cod=1");
}
?>