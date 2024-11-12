<?php

// include '.../model/conexao.class.php';
// include '.../model/ManagerUsuario.class.php';

// $UsuarioDAOimpl = new UsuarioDAOimpl();

// var_dump($_POST);
// if (!empty($_POST)) {
//     $UsuarioDAOimpl->updateUsuario($_POST);
//     header("Location: .../view/AlteraSenha.php?cod=1");
// }

require_once '../Model/Conexao.class.php';
require_once '../Model/Usuario.php';
require_once '../Model/UsuarioDAOImpl.php';

class UpdateUsuarioController {
private $usuarioDAO;

public function __construct() {
    $this->usuarioDAO = new UsuarioDAOImpl();
}

public function updateUsuario($dados) {
    // Criando objeto Usuario a partir dos dados do formulário
    $usuario = new Usuario();
    $usuario->Nome = $dados['nome'] ?? '';
    $usuario->Email = $dados['email'] ?? '';
    $usuario->Senha = $dados['senha'] ?? '';
    $usuario->Idade = $dados['idade'] ?? '';
    $usuario->Sexo = $dados['sexo'] ?? '';

    // Chamando o DAO para inserir o usuário
    $this->usuarioDAO->updateUsuario($usuario);

    // Redirecionamento após inserção
    header("Location: ../View/AlteraUsuario.php?cod=1");
    exit();
}
}
?>