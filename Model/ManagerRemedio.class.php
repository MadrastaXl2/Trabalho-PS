<?php

require_once 'RemedioDAO.php';
require_once 'Conexao.class.php';
require_once 'Remedio.php';

class RemediosDAOImple implements RemedioDao {
    private $conn;

    public function __construct() {
        $this->conn = conexao::get_instance();
    }

    public function getTodosRemedios() {
        $Remedio = array();
        try {
            $statement = $this->conn->query("SELECT * FROM remedio");
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $Remedio = new Remedio();
                $Remedio->getId($row('id'));
                $Remedio->getNome($row('nome'));
                $Remedio->getHorario($row('horario'));
                $Remedio->getData($row('data'));
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
                $Remedio->getId($row['id']);
                $Remedio->getNome($row['nome']);
                $Remedio->getHorario($row['horario']);
                $Remedio->getData($row['data']);
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