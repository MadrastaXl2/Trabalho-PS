<?php

class MenagerRemedios extends Conexao{

        public function Insert_Remedios($data){
            $pdo = parent::get_instance();
            $sql = "insert into usuario values (null, :nome, :email, :senha, :idade, :sexo)";
            $statement = $pdo->prepare($sql);
            foreach ($data as $key => $value){
                $statement->bindValue(":$key",$value);
            }
            $statement->execute();
        }

}


?>