<?php

require_once 'UsuarioDAO.php';
require_once 'Conexao.class.php';
require_once 'Usuario.php';

class UsuarioDAOimpl implements UsuarioDao {
    private $conn;

    public function __construct() {
        $this->conn = conexao::get_instance();
    }

    public function getTodosUsuarios() {
        $Usuario = array();
        try {
            $statement = $this->conn->query("SELECT * FROM Usuario");
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $Usuario = new Usuario();
                $Usuario->getId($row['id']);
                $Usuario->getnome($row['nome']);
                $Usuario->getEmail($row['email']);
                $Usuario->getSenha($row['senha']);
                $Usuario->getIdade($row['idade']);
                $Usuario->getSexo($row['sexo']);
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
                $Usuario->getId($row['id']);
                $Usuario->getnome($row['name']);
                $Usuario->getEmail($row['email']);
                $Usuario->getSenha($row['senha']);
                $Usuario->getIdade($row['idade']);
                $Usuario->getSexo($row['sexo']);
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $Usuario;
    }

    public function updateUsuario($Usuario) {
        try {
            $statement = $this->conn->prepare("UPDATE usuario SET nome=?, email=?,senha=?,idade=?,sexo =? WHERE id=?");
            $statement->execute([$Usuario->getNome(), $Usuario->getEmail(),$Usuario->getSenha(),$Usuario->getIdade(),$Usuario->getId()]);
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