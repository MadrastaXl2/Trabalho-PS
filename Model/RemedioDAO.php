<?php

include "Remedio.php";

interface RemedioDao{
    public function insertRemedios($Remedio);
    public function getTodosRemedios();
    public function getUmRemedio($id);
    public function updateRemedio($Remedio);
    public function deleteRemedio($Id);
  
}

?>