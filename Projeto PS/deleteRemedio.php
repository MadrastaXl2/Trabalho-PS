<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Cadastro Remedio</title>
    <link rel="stylesheet" href="verRemedios.css">
    <style type="text/css">
        body {
            margin: 20px;
        }
    </style>
</head>
<body>
<?php
    //Dados de conexão
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "pit";
    try {
        $conn = new mysqli($hostname, $username, $password, $database);
    } catch (Exception $e) {
        die("<div class = 'alert alert-danger' role='alert'>erro ao conectar: " . $e->getMessage() . "</div>");
    }
   
    $id = $_GET['id'];
    $sql = "DELETE FROM `registro` WHERE `registro`.`id` = $id";
    try{
        $resultado = $conn -> query($sql);
    }
    catch (Exception $e){
        echo "Erro ao deletar os dados";
    }

    ?>
    <?php if ($resultado) : ?>
        <div class="alert alert-success" role="alert">
            Dado deletado com sucesso!
        </div>
    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            Erro ao deletar o dado!
        </div>
    <?php endif ?>
    <a href="verRemedios.php" class="btn btn-primary">Ver remédios</a>
</body>