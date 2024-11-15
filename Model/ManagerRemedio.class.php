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
            $sql = "SELECT * FROM remedio ORDER BY id DESC";
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
            $sql = "SELECT * FROM remedio WHERE id = :id";
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
            $sql = "UPDATE remedio SET nome= :nome, horario= :horario,data= :data WHERE id= :id";
            $statement = $pdo->prepare($sql);

            $statement->bindValue(":id", $remedio->Id);
            $statement->bindValue(":nome", $remedio->Nome);
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
            $sql = "DELETE FROM remedio WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $Id->Id, PDO::PARAM_INT);
            $statement->execute();
        } catch (PDOException $e) {
            echo "Erro ao deletar remédio: " . $e->getMessage();
        }
    }

    
}


?>