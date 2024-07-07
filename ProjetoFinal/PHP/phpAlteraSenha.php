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

    $email = $conn->real_escape_string($_POST['email']);
    $senha = $conn->real_escape_string($_POST['senha1']);
    $senha2 = $conn->real_escape_string($_POST['senha2']);

       
       
        if ($senha == $senha2)
        {
            $sql = "UPDATE usuario SET senha = '$senha' where email = '$email'";
        // Executar a consulta
        if ($conn->query($sql) === TRUE) {
            $resultado = true;
        } else {
            echo "<div class='alert alert-danger' role='alert'>Erro ao alterar os dados: " . $conn->error . "</div>";
        }
        }
        else 
        {
            echo "As Senhas não são iguais";
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

    <a href="../PAGS/LoginHtml.php" class="btn btn-primary">Voltar</a>
</body>

</html>