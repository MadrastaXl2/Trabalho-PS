<?php
$pdo = new PDO('mysql:host=localhost;dbname=pit', 'root', '');
$sql = "SELECT * FROM usuario where id = 14";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
$linhas = $stmt->rowCount();
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mainPage.css">
    <title>Remédios Já</title>
</head>

<body>
    <!-- Inicio Cabeçalho-->
    <header id="cabecalho">
        <div id="imgLogo"> <!--Div da logo-->
            <img src="IMGS/Logo.png" width="15%" alt="logo">
            <h10 id="RemediosJa">Remédios Já</h10>
        </div>
        <div id="textos_do_meio">
            <a href="">Sobre nós</a>
            <a href="">O que fazemos</a>
            <a href="">Fale conosco</a>
        </div>
        <div id="ParteFinalCabecalho">
            <img id="tresListras" src="IMGS/menu.png" alt="Tres listras" width="60%">
            <div class="dropdown">
                <img src="IMGS/Usuario.png" type="button" data-bs-toggle="dropdown" aria-expanded="false" width="60%" alt="Usuário">
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Login</a></li>
                    <li><a class="dropdown-item" href="#">Cadastro</a></li>
                    <li><a class="dropdown-item" href="#">Home</a></li>
                    <li><a class="dropdown-item" href="usuInfo.php">Informações do usuário</a></li>
                </ul>
            </div>
        </div>
    </header>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col">Idade</th>
                <th scope="col">Sexo</th>
                <th scope="col" class="text-center" colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($linhas) : ?>
                <?php foreach ($resultado as $r) : ?>
                    <tr>
                        <td><?= $r['id'] ?></td>
                        <td><?= $r['nome'] ?></td>
                        <td><?= $r['email'] ?></td>
                        <td><?= $r['senha'] ?></td>
                        <td><?= $r['idade'] ?></td>
                        <td><?= $r['sexo'] ?></td>
                        <td><a href="atualiza.php?id=<?= $r['id'] ?>" class="btn btn-warning padding"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="delete.php?id=<?= $r['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="5">Não há dados</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>