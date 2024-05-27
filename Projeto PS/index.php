<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Página de Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
    <style type="text/css">
        body {
            margin: 20px;
        }
    </style>
</head>

<body>
    <div id="divGeral">
        <h1 class="text-center">Cadastro Usuario</h1>
        <form method="POST" action="insert_cadastro.php">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome: </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nome">
            </div>
            <div id="linha2">
                <div class="mb-4">
                    <label for="exampleFormControlInput2" class="form-label">E-mail: </label>
                    <input type="email" class="form-control" id="exampleFormControlInput2" name="email">
                </div>
                <div class="sexo">
                    <label for="radio">Sexo: </label>
                    <input type="radio" value="Masculino" class="radioSexo" id="sexoId" name="sexo">
                    <label for="radioSexo">Masculino</label>
                    <input type="radio" value="Feminino" class="radioSexo" id="sexoId2" name="sexo">
                    <label for="radioSexo">Feminino</label>                 
                </div>   
             </div>
             <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">idade: </label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="idade">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">senha: </label>
                <input type="password" class="form-control" id="exampleFormControlInput1" name="senha">
            </div>

            <div id="buttons" class="text-center">
                <button type="submit" name="submit" class="btn btn-success">Cadastrar</button>
            </div>
            </form>
    </div>
</body>