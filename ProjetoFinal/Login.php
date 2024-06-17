<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Realizar login</title>
</head>

<body>
    <?php
    // Dados de conexão
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "pit";

    // Conectar
    $conn = new mysqli($hostname, $username, $password, $database);
    if ($conn->connect_error) {
        die("<div class='alert alert-danger' role='alert'>Erro ao conectar: " . $conn->connect_error . "</div>");
    }

    $resultado = false;
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Preparar a consulta SQL com instruções preparadas para evitar injeção de SQL
        $sql = "SELECT * FROM usuario WHERE email = ? AND senha = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $senha); // 'ss' indica que os valores são strings

        // Executar a consulta
        $stmt->execute();

        // Armazenar o resultado
        $stmt->store_result();

        // Verificar se há linhas retornadas
        if ($stmt->num_rows > 0) {
            $resultado = true;
        }
    ?>
    
    <?php if ($resultado) : ?>
        <div class="alert alert-success" role="alert">
            Dados validados com sucesso!
        </div>
    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            Erro ao validar os dados!
        </div>
    <?php endif ?>
</body>

</html>
