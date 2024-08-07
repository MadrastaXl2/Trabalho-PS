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
    <link rel="stylesheet" href="../CSS/mainPage.css">
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
            <a href="">Sobre nós</a>
            <a href="">O que fazemos</a>
            <a href="">Fale conosco</a>
        </div>
        <div id="ParteFinalCabecalho">
            <img id="tresListras" src="../IMGS/menu.png" alt="Tres listras" width="60%">
            <div class="dropdown">
                <img src="IMGS/Usuario.png" type="button" data-bs-toggle="dropdown" aria-expanded="false" width="60%"
                    alt="Usuário">
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./LoginHtml.php">Login</a></li>
                    <li><a class="dropdown-item" href="./PagInsert.php">Cadastro</a></li>
                    <li><a class="dropdown-item" href="../index.php">Home</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div id="divGeral">
        <h1 class="text-center">Atualiza senha</h1>
        <form method="POST" action="../PHP/phpAlteraSenha.php">
        <div>
                <label for="Name">Insira o email: </label>
                <input type="text" id="name" name="email">
            </div>
            <div>
                <label for="Name">Insira a nova senha: </label>
                <input type="password" id="name" name="senha1">
            </div>
            <div>
                <label for="Name">Repita sua nova senha:   </label>
                <input type="password" id="name" name="senha2">
            </div>             
            
            <button type="submit" name="submit" class="btn btn-success">Atualizar</button>
            <a href="../PAGS/LoginHtml.php" class="btn btn-success">Voltar</a> 
        </form>
    </div>
    <div id="buttons" class="text-center">
    </div>
</form>

    </div>
</body>