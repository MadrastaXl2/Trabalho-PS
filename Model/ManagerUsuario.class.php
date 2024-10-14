<?php

require_once 'UsuarioDAO.php';
require_once 'Conexao.class.php';
require_once 'Usuario.php';

class UsuarioDAOimpl extends Conexao implements UsuarioDao {
    
    public function insertUsuario($Usuario){
        $pdo = parent::get_instance();
        $sql = "insert into usuario values (null, :nome, :email ,:senha,:idade,:sexo)";
        $statement = $pdo->prepare($sql);
        foreach ($Usuario as $key => $value){
            $statement->bindValue(":$key",$value);
        }
        $statement->execute();
    }

    public function getTodosUsuarios() {
        $pdo = parent::get_instance();
        $sql = "select * from usuario order by id desc";
        $statement = $pdo->query($sql);
        return $statement->fetchAll();
    }

    public function getUmUsuario($id) {
        $pdo = parent::get_instance();
        $sql = "select * from usuario where id = :id";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function updateUsuario($Usuario) {
        $pdo = parent::get_instance();
        $sql = "update paciente
                    set nome = :nome,
                         email = :email,
                            senha = :senha,
                                idade = :idade,
                                     sexo = :sexo
                                         where id = :id";
        var_dump($sql);
        $statement = $pdo->prepare($sql);
        foreach ($Usuario as $key => $value){
            $statement->bindValue(":$key", $value);
        }
        $statement->execute();
    }

    public function deleteUsuario($id) {
        $pdo = parent::get_instance();
        $sql = "delete from usuario where id = :id";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();
    }
}

?>