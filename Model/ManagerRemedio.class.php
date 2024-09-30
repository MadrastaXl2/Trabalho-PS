<?php

require_once 'RemedioDAO.php';
require_once 'Conexao.class.php';
require_once 'Remedio.php';

class RemediosDAOImple implements RemedioDao {
    private $conn;

    public function __construct() {
        $this->conn = conexao::get_instance();
    }

    public function insertRemedios($Remedio){
        try {
            $statement = $this->conn->prepare("INSERT INTO remedio VALUES null, :nome, :horario, :data");
            $statement->execute([':nome' => $Remedio->getNome(),':horario' => $Remedio->getHorario(),':data' => $Remedio->getData()]);
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
    }
    }

    public function getTodosRemedios() {
        $Remedios = array();
        try {
            $statement = $this->conn->prepare("SELECT * FROM remedio");
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $Remedio = new Remedio();
                $Remedio->setId($row['id']);
                $Remedio->setNome($row['nome']);
                $Remedio->setHorario($row['horario']);
                $Remedio->setData($row['data']);
                $Remedios[] = $Remedio;
              
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $Remedios;
    }

    public function getUmRemedio($id) {
        $Remedio = new Remedio();
        try {
            $statement = $this->conn->prepare("SELECT * FROM remedio WHERE id=?");
            $statement->execute([$id]);
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            if ($row) {
                $Remedio->setId($row['id']);
                $Remedio->setNome($row['nome']);
                $Remedio->setHorario($row['horario']);
                $Remedio->setData($row['data']);
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $Remedio;
    }

    public function updateRemedio($Remedio) {
        try {
            $statement = $this->conn->prepare("UPDATE remedio SET nome=?, horario=?,data=? WHERE id=?");
            $statement->execute([$Remedio->getNome(), $Remedio->getHorario(),$Remedio->getData(),$Remedio->getId()]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function deleteRemedio($Remedio) {
        try {
            $statement = $this->conn->prepare("DELETE FROM remedio WHERE id=?");
            $statement->execute([$Remedio->getId()]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}


?>