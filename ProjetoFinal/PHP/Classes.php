<?php 

class SobreMim{

    public int $Id;

    public function PegaId($idzin){
        return $id = $slq = "SELECT ID FROM USUARIO WHERE ID = $idzin";
    }

}


?>