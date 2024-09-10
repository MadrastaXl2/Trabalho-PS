<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../MainPage.css">
        <link rel="stylesheet" href="../CSS/AGUA.css">
    <title>MedFy</title>
<? 
    require "./PHP/Class_agua.php";
?>
    <style>
        .darkmode{
            background-color: #181414;
            color: white;
        }
        .darkmode #cabecalho{
            background-color: #00288b;
            color: white;
        }
        .darkmode #oqFazemos{
            background-color: #00288b;
            color: white;
        }
        .darkmode #sobreNos{
            background-color: #00288b;
            color: white;
        }
        .darkmode .geralClient{
            background-color: #00288b;
            color: white;
        }
    </style>
</head>

<?php
class Agua{

    function BebeAgua($Litros){

       
        if ($Litros < 2.1)
        {
            $Falta = 2.1 - $Litros;

            return "Ainda faltam {$Falta} Litros de agua para a quantidade ideal do dia !!!!";
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

            return "Ainda faltam {$Falta} Litros de agua para a quantidade ideal do dia !!!!";
        }
        else 
        {
            return "Parabens você bebeu a quantidade ideal do dia !!!";
        }

    }

}

$Litros_Tomados = $_POST['agua'];


$BAH = doubleval($Litros_Tomados);

$teste = new Agua();

$teste->BebeAgua($BAH);

echo $teste->BebeAgua($BAH);


?>
<button type="button" class="btn btn-primary"> <a href="../PAGS/Pag_Agua_HTML.php">Voltar</a></button>

