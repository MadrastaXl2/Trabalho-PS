<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/MainPage.css">
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
            <a href=""><strong>Fale conosco</strong></a>
        </div>
        <div id="ParteFinalCabecalho">
            <img id="tresListras" src="../IMGS/menu.png" alt="Tres listras" width="60%">
            <div class="dropdown">
                <img src="../IMGS/Usuario.png" type="button" data-bs-toggle="dropdown" aria-expanded="false" width="60%" alt="Usuário">
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./LoginHtml.php">Login</a></li>
                    <li><a class="dropdown-item" href="./PagInsert.php">Cadastro</a></li>
                    <li><a class="dropdown-item" href="../index.php">Home</a></li>
                </ul>
            </div>
        </div>
    </header>
    <form id="form" method="post" action="../PHP/envia.php">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="nome" placeholder="Nome">
            <label for="floatingInput">Escreva o seu nome</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingPassword" name="email" placeholder="Email">
            <label for="floatingPassword">Escreva o seu Email</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingPassword" name="assunto" placeholder="Assunto">
            <label for="floatingPassword">Escreva o assunto do Email</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="mensagem" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Escreva o que você deseja falar</label>
        </div>
        <button type="submit">Enviar</button>
    </form>
    
</body>