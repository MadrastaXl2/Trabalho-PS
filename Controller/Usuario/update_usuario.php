<?php

require_once ('../../Model/MenagerUsuario.class.php');
require_once ('../../Model/Conexao.class.php'); 

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