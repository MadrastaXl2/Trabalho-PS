<?php

interface UsuarioDao {
    public function getTodosUsuarios();
    public function getUmUsuario($id); 
    public function updateUsuario($Usuario); 
    public function deleteUsuario($Usuario);
}

?>