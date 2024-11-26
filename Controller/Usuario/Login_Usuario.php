<?php

require_once ('../../Model/ManagerUsuario.class.php');
require_once ('../../Model/Conexao.class.php'); 

if(isset($_POST['submit'])){
    $controller = new ValidaLoginController();
    $controller->ValidaLogin($_POST);
}

class ValidaLoginController{

    private $UsuarioDAO;
    public function __construct(){
        $this->UsuarioDAO = new UsuarioDAOImpl();
    }

    public function ValidaLogin($Dados){

        $usuario = new Usuario();

        $usuario->Email = $Dados['email'] ?? '';
        $usuario->Senha = $Dados['senha'] ?? '';

        $this->UsuarioDAO->ValidaLogin($usuario);

        header("Location: ../../View/Login.php?cod=1");
    }
}
?>
