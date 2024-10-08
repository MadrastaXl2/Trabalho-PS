<?php

require_once 'UsuarioDAO.php';
require_once 'Conexao.class.php';
require_once 'Usuario.php';

class UsuarioDAOimpl implements UsuarioDao {
    private $conn;

    public function __construct() {
        $this->conn = conexao::get_instance();
    }

    public function insertUsuario($Usuario){
        try {
            $statement = $this->conn->prepare("INSERT INTO usuario VALUES null, :nome, :email, :senha, :idade,:sexo");
            $statement->execute([':nome' => $Usuario->getNome(),':email' => $Usuario->getEmail(),':senha' => $Usuario->getSenha(),':idade' => $Usuario->getIdade(),':sexo' => $Usuario->getSexo()]);
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
    }
    }

    public function getTodosUsuarios() {
        $Usuarios = array();
        try {
            $statement = $this->conn->query("SELECT * FROM usuario");
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $Usuario = new Usuario();
                $Usuario->setId($row['id']);
                $Usuario->setnome($row['nome']);
                $Usuario->setEmail($row['email']);
                $Usuario->setSenha($row['senha']);
                $Usuario->setIdade($row['idade']);
                $Usuario->setSexo($row['sexo']);
                $Usuarios[] = $Usuario;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $Usuarios;
    }

    public function getUmUsuario($id) {
        $Usuario = new Usuario();
        try {
            $statement = $this->conn->prepare("SELECT * FROM usuario WHERE id=?");
            $statement->execute([$id]);
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            if ($row) {
                $Usuario->setId($row['id']);
                $Usuario->setnome($row['name']);
                $Usuario->setEmail($row['email']);
                $Usuario->setSenha($row['senha']);
                $Usuario->setIdade($row['idade']);
                $Usuario->setSexo($row['sexo']);
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $Usuario;
    }

    public function updateUsuario($Usuario) {
        try {
            $statement = $this->conn->prepare("UPDATE usuario SET senha=? WHERE email=?");
            $statement->execute([$Usuario->getSenha(),$Usuario->getEmail()]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function deleteUsuario($Usuario) {
        try {
            $statement = $this->conn->prepare("DELETE FROM usuario WHERE id=?");
            $statement->execute([$Usuario->getId()]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

?>