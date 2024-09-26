<?php

include '.../model/conexao.class.php';
include '.../model/ManagerUsuario.class.php';


$UsuarioDAOimpl = new UsuarioDAOimpl();

if (!empty($_POST)) {
    $UsuarioDAOimpl->insertUsuario($_POST);
    header("Location: .../view/InsereUsuario.php?cod=1");
}
?>