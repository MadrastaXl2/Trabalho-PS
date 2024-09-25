<?php

require_once 'RemedioDAO.php';
require_once 'Conexao.class.php';
require_once 'Remedio.php';

class RemedioDAOimpl implements RemedioDao {
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

    public function getUmUsuario($id) {
        $Usuario = new Usuario();
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

    public function deleteUsuario($Remedio) {
        try {
            $statement = $this->conn->prepare("DELETE FROM remedio WHERE id=?");
            $statement->execute([$Remedio->getId()]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

}


?>