<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro Remedio</title>
    <link rel="stylesheet" href="remedio.css">
    <style type="text/css">
        body {
            margin: 20px;
        }
    </style>
</head>

<body>
    <div id="divGeral">
        <h1 class="text-center">Cadastro De Remedios</h1>
        <form method="POST" action="insertRemedio.php">
            <div>
                <label for="Name">Nome do remedio : </label>
                <input type="name" id="name" name="Nome">
            </div>
            <div>
                <label for="time">Frequência do remédio (em horas):   </label>
                <input type="number" id="time" name="Horario">
            </div>             
            <div>
                <label for="Date">Periodo de medicação:</label>
                <input type="Date" id="Date" name="Data">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </div>
    <div id="buttons" class="text-center">
        
        <a href="verRemedios.php" class="btn btn-success">Ver meus remédios</a> 
    </div>
</form>

    </div>
</body>
