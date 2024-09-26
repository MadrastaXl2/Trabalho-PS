<?php

include '.../model/conexao.class.php';
include '.../model/ManagerUsuario.class.php';

$UsuarioDAOimpl = new UsuarioDAOimpl();

var_dump($_POST);
if (!empty($_POST)) {
    $UsuarioDAOimpl->updateUsuario($_POST);
    header("Location: .../view/AlteraSenha.php?cod=1");
}

?>