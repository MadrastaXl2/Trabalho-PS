<?php

class calculaCalorias {

    function calculaCal($peso, $atividade, $duracao){

        $metTabela = [
            'corrida' => 9.8,
            'caminhada' => 3.8,
            'ciclismo' => 7.5,
            'natação' => 8.0,
            'musculação' => 6.0,
        ];
        $met = $metTabela[$atividade];
        $caloriasQueimadas = ($met * $peso * $duracao)/60;
        $cal = doubleval($caloriasQueimadas);

        return $cal;
    }

}

?>