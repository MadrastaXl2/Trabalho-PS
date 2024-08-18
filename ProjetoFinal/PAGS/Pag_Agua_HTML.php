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
        <link rel="stylesheet" href="../CSS/MainPage.css">
        <link rel="stylesheet" href="../CSS/AGUA.css">
    <title>Remédios Já</title>
<? 
    require "./PHP/Class_agua.php";
?>
    <style>
        .darkmode{
            background-color: #181414;
            color: white;
        }
        .darkmode #cabecalho{
            background-color: #00288b;
            color: white;
        }
        .darkmode #oqFazemos{
            background-color: #00288b;
            color: white;
        }
        .darkmode #sobreNos{
            background-color: #00288b;
            color: white;
        }
        .darkmode .geralClient{
            background-color: #00288b;
            color: white;
        }
    </style>
</head>
<script>
        function myFunction() {
        var body = document.body;
        body.classList.toggle("darkmode");
        }
    </script>
<body>

    <!-- Inicio Cabeçalho-->
    <header id="cabecalho">
        <div id="imgLogo"> <!--Div da logo-->
            <img onclick="myFunction()" src="../IMGS/Logo.png" width="15%" alt="logo">
            <h10 id="RemediosJa">Remédios Já</h10>
        </div>
        <div id="textos_do_meio">
            <a href="#sobreNos">Sobre nós</a>
            <a href="#titleFaz">O que fazemos</a>
            <a href="./PAGS/faleConosco.php">Fale conosco</a>
        </div>
        <div>

        </div>
        <div id="ParteFinalCabecalho">
            <img id="tresListras" src="../IMGS/menu.png" alt="Tres listras" width="60%">
            <div class="dropdown">
                <img src="../IMGS/Usuario.png" type="button" data-bs-toggle="dropdown" aria-expanded="false" width="60%"
                    alt="Usuário">
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="LoginHtml.php">Login</a></li>
                    <li><a class="dropdown-item" href="PagInsert.php">Cadastro de usuário</a></li>
                    <li><a class="dropdown-item" href="InsertRemedio.php">Cadastro de Remédio</a></li>
                    <li><a class="dropdown-item" href="usoInfo.php">Informações do usuário</a></li>
                    <li><a class="dropdown-item" href="calculaCal.php">Calculadora de calorias</a></li>

                    
                </ul>
            </div>
        </div>
    </header>

        <div id = "separador"></div>

         <div id = "coisa_redonda_meio">

                        <div id = "agua">Quanto falta de água</div>
            <form action="../PHP/Agua.php" method="POST">


            <label for="">Litros tomados : </label>
                <input type="text" name = "agua">

                    <input type="submit" value = "Calcular">

            </form>

         </div>


</body>