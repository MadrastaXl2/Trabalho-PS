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
     require "Classes.php";

        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha1']);
        $senha2 = $conn->real_escape_string($_POST['senha2']);

        $resposta; // criar a variavel resposta por segurança
        try {
            
            $pdo = new PDO('mysql:host=localhost;dbname=pit','root','');
            
             if ($senha == $senha2) {

                $sql = "UPDATE usuario SET senha = '$senha' where email = '$email'";
                 // Executar a consulta
                 $stmt = $pdo->prepare($sql);

                // coloca no coringa o valor da variavel
                $stmt->bindParam(':email',$email, PDO::PARAM_STR);
                $senha->bindParam(':senha',$senha,PDO::PARAM_STR);
               
        }
        
        //PDO::PARAM_STR é para falar q o paramentro e string 
        
        //Executar a query
        $resposta = $stmt->execute();
        } catch (PDOException $e) {
            $resposta = $e->getMessage("");
        }
        
        //passa as informações para o index
        header("Location: ../index.php?resposta=".$resposta);

    ?>
</body>

</html>