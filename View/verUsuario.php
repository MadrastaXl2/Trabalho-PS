<?php
require_once '../Model/Conexao.class.php';
require_once '../Model/ManagerUsuario.class.php';
require_once '../Model/UsuarioDAO.php';
require_once '../Model/Usuario.php';

$Usuarios = new UsuarioDAOImpl();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>informações usuários</title>
    <link rel="stylesheet" href="verRemedios.css">
    <style type="text/css">
        body {
            margin: 20px;
        }
    </style>
</head>
<body>
<h1 class="text-center">Informações usuários</h1>
<table class="table table-striped table-bordered">
    <thead>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Senha</th>
        <th scope="col">Idade</th>
        <th scope="col">Sexo</th>
        <th scope="col" class="text-center" colspan="2">Ações</th>
    </thead>  
    <tbody>
        <?php          
        foreach ($Usuarios->getUmUsuario($usuario['id']) as $usuario){
        ?>
            <tr>
                <th scope="row"><?= $usuario['id'] ?></th>
                <td><?= $usuario['nome']?></td>
                <td><?= $usuario['email'] ?></td>
                <td><?= $usuario['senha'] ?></td>    
                <td><?= $usuario['idade'] ?></td>     
                <td><?= $usuario['sexo'] ?></td>     
                <td><a href="../PHP/phpAlterar.php?id=<?= $usuario['id'] ?>" class="btn btn-warning padding"><i class="bi bi-pencil-square"></i></a></td>
                <td><a href="../PHP/PhpDeleteRemedios.php?id=<?= $usuario['id']?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>          
            </tr>
        <?php } ?>
    </tbody>  
</table>
</body>
</html>