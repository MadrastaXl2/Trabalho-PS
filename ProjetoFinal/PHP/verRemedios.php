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
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "pit";

    //Conectar
    $conn = new mysqli($hostname, $username, $password, $database);

    if ($conn -> error){
        die("Erro ao conectar $conn -> error");
    }

    //Query
    $sql = "SELECT * FROM registro";

    //Executar query
    $resultado = $conn->query($sql);
?>
<h1 class="text-center">Cadastro de Remédios</h1>
<table class="table table-striped table-bordered">
    <thead>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Horario</th>
        <th scope="col">Data</th>
        <th scope="col" class="text-center" colspan="2">Ações</th>
    </thead>  
    <tbody>
        <?php 
        foreach ($resultado as $linha){
        ?>
            <tr>
                <th scope="row"><?= $linha['id'] ?></th>
                <td><?php echo $linha['Nome'] . '<br>'; ?></td>
                <td><?php echo $linha['Horario'] . '<br>'; ?></td>
                <td><?php echo $linha['Data'] . '<br>'; ?></td>     
                <td><a href="updateRemedio.php?id=<?= $linha['id'] ?>" class="btn btn-warning padding"><i class="bi bi-pencil-square"></i></a></td>
                <td><a href="deleteRemedio.php?id=<?= $linha['id']?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>          
            </tr>
        <?php } ?>
    </tbody>  
</table>
</body>
</html>