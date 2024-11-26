<?php

require_once 'UsuarioDAO.php';
require_once 'Conexao.class.php';
require_once 'Usuario.php';

class UsuarioDAOImpl implements UsuarioDAO {
    private $conexao;
    
    public function __construct() {
        $this->conexao = new Conexao();
    }
    
    public function insertUsuario($usuario) {
        try {
            $pdo = $this->conexao->get_instance();
            $sql = "INSERT INTO usuario (nome, email, senha, idade, sexo) 
                    VALUES (:nome, :email, :senha, :idade, :sexo)";
            $statement = $pdo->prepare($sql);
    
            $statement->bindValue(":nome", $usuario->Nome);
            $statement->bindValue(":email", $usuario->Email);
            $statement->bindValue(":senha", $usuario->Senha);
            $statement->bindValue(":idade", $usuario->Idade);
            $statement->bindValue(":sexo", $usuario->Sexo);
            
            $statement->execute();
        } catch (PDOException $e) {
            echo "Erro ao inserir usuário: " . $e->getMessage();
        }
    }
    
    public function getTodosUsuarios() {
        try {
            $pdo = $this->conexao->get_instance();
            $sql = "SELECT * FROM usuario ORDER BY id DESC";
            $statement = $pdo->query($sql);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao buscar usuários: " . $e->getMessage();
        }
    }
    
    public function getUmUsuario($id) {
        try {
            $pdo = $this->conexao->get_instance();
            $sql = "SELECT * FROM usuario WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao buscar usuário: " . $e->getMessage();
        }
    }
    
    public function updateUsuario($usuario) {
        try {
            $pdo = $this->conexao->get_instance();
            $sql = "UPDATE usuario SET 
                        nome = :nome,
                        email = :email,
                        senha = :senha,
                        idade = :idade,
                        sexo = :sexo
                    WHERE id = :id";
            
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":nome", $usuario->nome);
            $statement->bindValue(":email", $usuario->email);
            $statement->bindValue(":senha", $usuario->senha);
            $statement->bindValue(":idade", $usuario->idade);
            $statement->bindValue(":sexo", $usuario->sexo);
            $statement->bindValue(":id", $usuario->id, PDO::PARAM_INT);
            
            $statement->execute();
        } catch (PDOException $e) {
            echo "Erro ao atualizar usuário: " . $e->getMessage();
        }
    }
    
    public function deleteUsuario($id) {
        try {
            $pdo = $this->conexao->get_instance();
            $sql = "DELETE FROM usuario WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $id, PDO::PARAM_INT);
            $statement->execute();
        } catch (PDOException $e) {
            echo "Erro ao deletar usuário: " . $e->getMessage();
        }
    }

    public function UpdateSenha($usuario)
    {
        try{
            $pdo = $this->conexao->get_instance();
            $sql = "UPDATE usuario SET senha = :senha where email = :email";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":senha", $usuario->Senha, PDO::PARAM_INT);
            $statement->bindValue(":email", $usuario->Email, PDO::PARAM_INT);
            $statement->execute();
        }
        catch (PDOException $e) {
        echo "Erro ao alterar a senha do usuário: " . $e->getMessage();
    }
        
    }

     public function ValidaLogin($Usuario)
    {
        try{
            $pdo = $this->conexao->get_instance();
            $sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":email", $Usuario->email);
            $statement->bindValue(":senha", sha1($Usuario->senha));
            // sha1 é para deixar a senha "segura".
        }
        catch (PDOException $e) {
            echo "Erro ao Logar : " . $e->getMessage();
        }
    }

    }

    
?>
