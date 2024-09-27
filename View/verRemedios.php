<?php
require_once '../Model/Conexao.class.php';
require_once '../Model/ManagerRemedio.class.php';
require_once '../Model/RemedioDAO.php';
require_once '../Model/Remedio.php';

?>

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
    $remedioDAO = new RemediosDAOImple();
    $remedios = $remedioDAO->getTodosRemedios();
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
        foreach ($remedios as $remedio){
        ?>
            <tr>
                <th scope="row"><?= $remedio->getId() ?></th>
                <td><?php echo $remedio->getNome() . '<br>'; ?></td>
                <td><?php echo $remedio->getHorario(). '<br>'; ?></td>
                <td><?php echo $remedio->getData() . '<br>'; ?></td>     
                <td><a href="../PHP/phpAlterar.php?id=<?= $remedio->getId() ?>" class="btn btn-warning padding"><i class="bi bi-pencil-square"></i></a></td>
                <td><a href="../PHP/PhpDeleteRemedios.php?id=<?= $remedio->getId()?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>          
            </tr>
        <?php } ?>
    </tbody>  
</table>
</body>
</html>