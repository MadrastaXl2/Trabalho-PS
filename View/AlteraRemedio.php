<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Atualizar Remédio</title>
</head>

<body>
    <?php
    // Dados de conexão
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "pit";
    $resultado = false;

    // Conectar
    $conn = new mysqli($hostname, $username, $password, $database);

    // Verificar conexão
    if ($conn->connect_error) {
        die("<div class='alert alert-danger' role='alert'>Erro ao conectar: " . $conn->connect_error . "</div>");
    }

    // Verificar se o ID está definido
    if (isset($_GET['id'])) {
        $id = $conn->real_escape_string($_GET['id']);
        // Criar o comando
        $sql = "SELECT * FROM `remedio` WHERE id = '$id'";
        // Executar o comando
        $resultadoSelect = $conn->query($sql);
        if (!$resultadoSelect) {
            echo "<div class='alert alert-danger' role='alert'>Erro ao processar</div>";
        }
    }

    // Verificar se os campos POST não estão vazios
    if (!empty($_POST['id']) && !empty($_POST['Nome']) && !empty($_POST['Horario']) && !empty($_POST['Data'])) {
        $id = $conn->real_escape_string($_POST['id']);
        $nome = $conn->real_escape_string($_POST['Nome']);
        $horario = $conn->real_escape_string($_POST['Horario']);
        $data = $conn->real_escape_string($_POST['Data']);
        // Criar a consulta SQL de atualização
        $sql = "UPDATE `remedio` SET nome = '$nome', horario = '$horario', Data = '$data' WHERE id = '$id'";
        // Executar a consulta
        if ($conn->query($sql) === TRUE) {
            $resultado = true;
        } else {
            echo "<div class='alert alert-danger' role='alert'>Erro ao alterar os dados: " . $conn->error . "</div>";
        }
    }
    // Fechar conexão
    $conn->close();
    ?>

    <?php if ($resultado) : ?>
        <div class="alert alert-success" role="alert">
            Dado alterado com sucesso!
        </div>
    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            Erro ao alterar o dado!
        </div>
    <?php endif ?>

    <a href="verRemedios.php" class="btn btn-primary">Ver dados</a>
</body>

</html>