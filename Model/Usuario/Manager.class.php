<?php

class Manager extends Conexao{
    public function insert_paciente($data)
    {
        $pdo = parent::get_instance();
        $sql = "insert into paciente values (null, :nome, :sexo, :historico_medico)";
        $statement = $pdo->prepare($sql);
        foreach ($data as $key => $value){
            $statement->bindValue(":$key",$value);
        }
        $statement->execute();
    }
    public function list_paciente()
    {
        $pdo = parent::get_instance();
        $sql = "select * from paciente order by id desc";
        $statement = $pdo->query($sql);
        return $statement->fetchAll();
    }
    public function list_paciente_by_id($id)
    {
        $pdo = parent::get_instance();
        $sql = "select * from paciente where id = :id";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();
        return $statement->fetchAll();
    }
    public function delete_paciente($id)
    {
        $pdo = parent::get_instance();
        $sql = "delete from paciente where id = :id";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();
    }
    public function update_paciente($data)
    {
        $pdo = parent::get_instance();
        $sql = "update paciente
                    set nome = :nome,
                        sexo = :sexo,
                            historico_medico = :historico_medico
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