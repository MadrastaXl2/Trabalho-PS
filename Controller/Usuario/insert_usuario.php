 <?php

// include '../Model/Conexao.class.php';
// include '../Model/ManagerUsuario.class.php';


// $UsuarioDAOimpl = new UsuarioDAOimpl();

// if (!empty($_POST)) {
//     $UsuarioDAOimpl->insertUsuario($_POST);
//     header("Location: ../View/InsereUsuario.php?cod=1");
// }

require_once '../Model/Conexao.class.php';
require_once '../Model/Usuario.php';

class InsertUsuarioController {
private $usuarioDAO;


public function __construct() {
    $this->usuarioDAO = new UsuarioDAOImpl();
}

public function inserirUsuario($dados) {
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
    header("Location: ../View/InsereUsuario.php?cod=1");
    exit();
}
}
?>