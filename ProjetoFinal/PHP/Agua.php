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

$Litros_Tomados = $_POST['agua'];


$BAH = intval($Litros_Tomados);

$teste = new Agua();

$teste->BebeAgua($BAH);

echo $teste->BebeAgua($BAH);


?>
<a href="../PAGS/Pag_Agua_HTML.php"></a>