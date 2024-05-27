<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Primeiro formulário</title>
    <title>INSERT</title>
</head>


<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "pit";
$resultado;

try {
    $conn = new mysqli($hostname, $username, $password, $database);
} catch (Exception $e) {
    die("<div class = 'alert alert-danger' role='alert'>erro ao conectar: " . $e->getMessage() . "</div>");
}
if (!empty($_POST['email']) && !empty($_POST['senha'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    $senha = $_POST['senha'];
    $sql = "INSERT INTO usuario VALUES (NULL, '$nome', '$email', '$sexo', '$idade', '$senha')";

    $resultado = $conn->query($sql);
} else {
    echo "Erro ao inserir os dados";
}
?>

<?php if ($resultado) : ?>
    <div class="alert alert-success" role="alert">
        dado inserido com sucesso!
    </div>
<?php else : ?>
    <div class="alert alert-danger" role="alert">
        Erro ao inserir o dado!
    </div>
<?php endif ?>
<a href="index.php" class="btn btn-primary" id="corbtn">Voltar</a>
<a href="LoginFront.php" class="btn btn-primary" id="corbtn">Login</a>
</body>