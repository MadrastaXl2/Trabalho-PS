<?php
class Agua{

    function BebeAgua($Litros){

       
        if ($Litros < 2.1)
        {
            $Falta = 2.1 - $Litros;

            return "Ainda faltam {$Falta} de agua para a quantidade ideal do dia !!!!";
        }
        else 
        {
            return "Parabens você bebeu a quantidade ideal do dia!!!";
        }

    }

    function BebeAguaPerso($litros,$quantidade){

        if ($litros < $quantidade)
        {
            $Falta = $quantidade - $litros;

            return "Ainda faltam {$Falta} de agua para a quantidade ideal do dia !!!!";
        }
        else 
        {
            return "Parabens você bebeu a quantidade ideal do dia !!!";
        }

    }

}
?>