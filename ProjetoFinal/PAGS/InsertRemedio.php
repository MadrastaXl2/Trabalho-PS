<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/Mainpage.css">
    <link rel="stylesheet" href="../CSS/InsertRemedios.css">
    <title>Remédios Já</title>
</head>

<body>
    <!-- Inicio Cabeçalho-->
    <header id="cabecalho">
        <div id="imgLogo"> <!--Div da logo-->
            <img src="../IMGS/Logo.png" width="15%" alt="logo">
            <h10 id="RemediosJa">Remédios Já</h10>
        </div>
        <div id="textos_do_meio">
            <a href="../index.php">Sobre nós</a>
            <a href="../index.php">O que fazemos</a>
            <a href="faleConosco.php">Fale conosco</a>
        </div>
        <div id="ParteFinalCabecalho">
            <img id="tresListras" src="../IMGS/menu.png" alt="Tres listras" width="60%">
            <div class="dropdown">
                <img src="../IMGS/Usuario.png" type="button" data-bs-toggle="dropdown" aria-expanded="false" width="60%"
                    alt="Usuário">
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="LoginHtml.php">Login</a></li>
                    <li><a class="dropdown-item" href="PagInsert.php">Cadastro</a></li>
                    <li><a class="dropdown-item" href="#">Home</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div id="divGeral">
        <h1 class="text-center">Cadastro De Remedios</h1>
        <form method="POST" action="insertRemedio.php">
            <div>
                <label for="Name">Nome do remedio : </label>
                <input type="name" id="name" name="nome">
            </div>
            <div>
                <label for="time">Frequência do remédio (em horas):   </label>
                <input type="number" id="time" name="horario">
            </div>             
            <div>
                <label for="Date">Periodo de medicação:</label>
                <input type="Date" id="Date" name="data">
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