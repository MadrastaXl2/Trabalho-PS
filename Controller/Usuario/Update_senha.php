<?php

require_once ('../../Model/MenagerUsuario.class.php');
require_once ('../../Model/Conexao.class.php'); 

if(isset($_POST['submit'])){
    $controller = new UpdateSenhaController();
    $controller->AlteraSenha($_POST);
}

class UpdateSenhaController{

    private $UsuarioDAO;
    public function __construct(){
        $this->UsuarioDAO = new UsuarioDAOImpl();
    }

    public function AlteraSenha($Dados){

        $usuario = new Usuario();

        $usuario->Senha = $Dados['senha'] ?? '';
        $usuario->Email = $Dados['email'] ?? '';

        $this->UsuarioDAO->UpdateSenha($usuario);

        header("Location: ../../View/UpdateSenha.php?cod=1");
    }
}
?>