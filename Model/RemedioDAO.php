<?php

interface RemedioDao {
    public function getTodosRemedios();
    public function getUmRemedio($id);
    public function updateRemedio($Remedio);
    public function deleteRemedio($Remedio);
}

?>