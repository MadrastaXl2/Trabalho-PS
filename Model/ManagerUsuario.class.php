<?php


class MenagerUsuario extends Conexao{

     public function Insert_Usuario($data){
        $pdo = parent::get_instance();
        $sql = "insert into usuario values (null, :nome, :email, :senha, :idade, :sexo)";
        $statement = $pdo->prepare($sql);
        foreach ($data as $key => $value){
            $statement->bindValue(":$key",$value);
        }
        $statement->execute();
    }

    public function List_Usuario(){
        $pdo = parent::get_instance();
        $sql = "select * from usuario order by id desc";
        $statement = $pdo->query($sql);
        return $statement->fetchAll();
    }

    public function list_Usuario_por_id($id){
        $pdo = parent::get_instance();
        $sql = "select * from usuario where id = :id";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function delete_Usuario($id){
        $pdo = parent::get_instance();
        $sql = "delete from usuario where id = :id";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();
    }

    public function update_Usuario($data)
    {
        $pdo = parent::get_instance();
        $sql = "update usuario
                    set nome = :nome,
                        email = :email,
                            senha = :senha,                               
                                idade = :idade, 
                                    sexo = :sexo                               
                                            where id = :id";
        var_dump($sql);
        $statement = $pdo->prepare($sql);
        foreach ($data as $key => $value){
            $statement->bindValue(":$key", $value);
        }
        $statement->execute();
    }
}


?>