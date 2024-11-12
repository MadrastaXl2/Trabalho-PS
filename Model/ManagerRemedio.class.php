<?php

require_once("RemedioDAO.php");
require_once("Conexao.class.php");
require_once("Remedio.php");

class RemediosDAOImpl implements RemedioDao {

    private $conexao;
    
    public function __construct() {
        $this->conexao = Conexao::get_instance();
    }

    public function insertRemedios($remedio){
        try {
            $pdo = $this->conexao;
            $sql = "INSERT INTO remedio (nome, horario, data) VALUES (:nome, :horario, :data)";
            $statement = $pdo->prepare($sql);

            $statement->bindValue(":nome", $remedio->Nome);
            $statement->bindValue(":horario", $remedio->Horario);
            $statement->bindValue(":data", $remedio->Data);

            $statement->execute();
        }
        catch(PDOException $e){
            echo "Erro ao inserir remédio: " . $e->getMessage();
        }
    }
    

    public function getTodosRemedios() {
        try {
            $pdo = $this->conexao;
            $sql = "select * from remedio order by id desc";
            $statement = $pdo->query($sql);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
                       
        } catch (PDOException $e) {
            echo "Erro ao buscar os remédios: " . $e->getMessage();
        }
    }

    public function getUmRemedio($id) {
        // $Remedio = new Remedio();
        try {
            $pdo = $this->conexao;
            $sql = "select * from remedio where id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao buscar remédio: " . $e->getMessage();
        }
       // return $Remedio;
    }

    public function updateRemedio($remedio) {
        try {
            $pdo = $this->conexao;
            $sql = "UPDATE remedio SET nome= :nome, horario= :horario,data= :data WHERE id=?";
            $statement = $pdo->prepare($sql);

            $statement->bindValue(":nome", $remedio->nome);
            $statement->bindValue(":horario", $remedio->Horario);
            $statement->bindValue(":data", $remedio->Data);

            $statement->execute();
        } catch (PDOException $e) {
            echo "Erro ao atualizar remédio: " . $e->getMessage();
        }
    }

    public function deleteRemedio($Id) {    
        try {
            $pdo = $this->conexao;
            $sql = "delete from client where id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $Id, PDO::PARAM_INT);
            $statement->execute();
        } catch (PDOException $e) {
            echo "Erro ao deletar remédio: " . $e->getMessage();
        }
    }

    // public function insertRemedios($Remedio){
    //     try {
    //         $nome = $Remedio->Nome;
    //         $horario = $Remedio->Horario;
    //         $data = $Remedio->Data;

    //         $pdo = parent::get_instance();

    //         $sql = "INSERT INTO remedio (nome, horario, data) VALUES :nome, :horario, :data";

    //         $statement = $pdo->prepare($sql);
    //         foreach ($Remedio as $key => $value){
    //             $statement->bindValue(":nome", $nome);
    //             $statement->bindValue(":horario", $horario);
    //             $statement->bindValue(":data", $data);
    //         }
    //         $statement->execute();
    //     }
    //     catch(PDOException $e){
    //         echo "Error: " . $e->getMessage();
    // }
    // }

    // public function getTodosRemedios() {
    //     $Remedios = array();
    //     try {
    //         $pdo = parent::get_instance();
    //         $sql = "select * from remedio order by id";
    //         $statement = $pdo->query($sql);
    //         $statement->execute();

    //         return $statement->fetchAll();
              
            
    //     } catch (PDOException $e) {
    //         echo "Error: " . $e->getMessage();
    //     }
    //     return $Remedios;
    // }

    // public function getUmRemedio($id) {
    //     // $Remedio = new Remedio();
    //     try {
    //         $pdo = parent::get_instance();
    //         $sql = "select * from remedio where id = :id";
    //         $statement = $pdo->prepare($sql);
    //         $statement->bindValue(":id", $id);
    //         $statement->execute();
    //         return $statement->fetchAll();
    //     } catch (PDOException $e) {
    //         echo "Error: " . $e->getMessage();
    //     }
    //    // return $Remedio;
    // }

    // public function updateRemedio($Remedio) {
    //     try {
    //         $pdo = parent::get_instance();
    //         $sql = "UPDATE remedio SET nome=?, horario=?,data=? WHERE id=?";
    //         var_dump($sql);
    //         $statement = $pdo->prepare($sql);
    //         foreach ($Remedio as $key => $value){
    //             $statement->bindValue(":$key", $value);
    //         }
    //         $statement->execute();
    //     } catch (PDOException $e) {
    //         echo "Error: " . $e->getMessage();
    //     }
    // }

    // public function deleteRemedio($Id) {
    //     try {
    //         $pdo = parent::get_instance();
    //         $sql = "delete from client where id = :id";
    //         $statement = $pdo->prepare($sql);
    //         $statement->bindValue(":id", $Id);
    //         $statement->execute();
    //     } catch (PDOException $e) {
    //         echo "Error: " . $e->getMessage();
    //     }
    // }

}


?>