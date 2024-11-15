<?php

require_once ('../../Model/ManagerUsuario.class.php');
require_once ('../../Model/Conexao.class.php'); 

if(isset($_POST['submit'])){
    $controller = new UpdateUsuarioController();
    $controller->InsereUsuarios($_POST);
}

class UpdateUsuarioController {
private $usuarioDAO;

public function __construct() {
    $this->usuarioDAO = new UsuarioDAOImpl();
}

public function InsereUsuarios($dados) {
    // Criando objeto Usuario a partir dos dados do formulário
    $usuario = new Usuario();
    $usuario->Nome = $dados['nome'] ?? '';
    $usuario->Email = $dados['email'] ?? '';
    $usuario->Senha = $dados['senha'] ?? '';
    $usuario->Idade = $dados['idade'] ?? '';
    $usuario->Sexo = $dados['sexo'] ?? '';

    // Chamando o DAO para inserir o usuário
    $this->usuarioDAO->insertUsuario($usuario);

    // Redirecionamento após inserção
    header("Location: ../../View/InsereUsuario.php?cod=1");
    exit();
}
}
?>