<?php

interface UsuarioDao extends Usuario{
    public function insertUsuario($Usuario);
    public function getTodosUsuarios();
    public function getUmUsuario($id); 
    public function updateUsuario($Usuario); 
    public function deleteUsuario($Usuario);
}

?>