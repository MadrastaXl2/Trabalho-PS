<?php

class MenagerRemedios extends Conexao{

        public function Insert_Remedio($data){
            $pdo = parent::get_instance();
            $sql = "insert into remedio values (null, :nome, :horario, :data)";
            $statement = $pdo->prepare($sql);
            foreach ($data as $key => $value){
                $statement->bindValue(":$key",$value);
            }
            $statement->execute();
        }

        public function List_Remedio(){
            $pdo = parent::get_instance();
            $sql = "select * from remedio order by id desc";
            $statement = $pdo->query($sql);
            return $statement->fetchAll();
        }

        public function list_Remedio_por_id($id){
            $pdo = parent::get_instance();
            $sql = "select * from remedio where id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $id);
            $statement->execute();
            return $statement->fetchAll();
        }

        public function delete_Remedio($id){
            $pdo = parent::get_instance();
            $sql = "delete from remedio where id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $id);
            $statement->execute();
        }

        public function update_Usuario($data){
        $pdo = parent::get_instance();
        $sql = "update remedio
                    set nome = :nome,
                            horario = :horario,
                                data = :data                              
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