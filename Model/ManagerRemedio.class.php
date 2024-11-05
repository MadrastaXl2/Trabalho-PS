<?php

require_once 'RemedioDAO.php';
require_once 'Conexao.class.php';
require_once 'Remedio.php';

class RemediosDAOImple extends Conexao implements RemedioDao {

    public function insertRemedios($Remedio){
        try {
            $nome = $Remedio->Nome;
            $horario = $Remedio->Horario;
            $data = $Remedio->Data;

            $pdo = parent::get_instance();

            $sql = "INSERT INTO remedio (nome, horario, data) VALUES :nome, :horario, :data";

            $statement = $pdo->prepare($sql);
            foreach ($Remedio as $key => $value){
                $statement->bindValue(":nome", $nome);
                $statement->bindValue(":horario", $horario);
                $statement->bindValue(":data", $data);
            }
            $statement->execute();
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
    }
    }

    public function getTodosRemedios() {
        $Remedios = array();
        try {
            $pdo = parent::get_instance();
            $sql = "select * from remedio order by id";
            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
              
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $Remedios;
    }

    public function getUmRemedio($id) {
        // $Remedio = new Remedio();
        try {
            $pdo = parent::get_instance();
            $sql = "select * from remedio where id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $id);
            $statement->execute();
            return $statement->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
       // return $Remedio;
    }

    public function updateRemedio($Remedio) {
        try {
            $pdo = parent::get_instance();
            $sql = "UPDATE remedio SET nome=?, horario=?,data=? WHERE id=?";
            var_dump($sql);
            $statement = $pdo->prepare($sql);
            foreach ($Remedio as $key => $value){
                $statement->bindValue(":$key", $value);
            }
            $statement->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function deleteRemedio($Id) {
        try {
            $pdo = parent::get_instance();
            $sql = "delete from client where id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $Id);
            $statement->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}


?>