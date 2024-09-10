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
    <link rel="stylesheet" href="../Mainpage.css">
    <link rel="stylesheet" href="../CSS/InsertRemedios.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MedFy</title>
</head>

<body>
    <!-- Inicio Cabeçalho-->
    <header id="cabecalho">
        <div id="imgLogo"> <!--Div da logo-->
            <img src="../IMGS/Logo.png" width="15%" alt="logo">
            <h10 id="RemediosJa">MedFy</h10>
        </div>
        <div id="textos_do_meio">
            <a href="../index.php">Sobre nós</a>
            <a href="../index.php">O que fazemos</a>
            <a href="faleConosco.php">Fale conosco</a>
        </div>
        <div id="ParteFinalCabecalho">
        <img src="../IMGS/Usuario.png" class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" width="50%" alt="Usuário">
            <div class="dropdown">
                <!-- Corrigido o botão do dropdown -->                
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="LoginHtml.php">Login</a></li>
                    <li><a class="dropdown-item" href="PagInsert.php">Cadastro de usuário</a></li>
                    <li><a class="dropdown-item" href="InsertRemedio.php">Cadastro de Remédio</a></li>
                    <li><a class="dropdown-item" href="usoInfo.php">Informações do usuário</a></li>
                    <li><a class="dropdown-item" href="calculaCal.php">Calculadora de calorias</a></li>
                    <li><a class="dropdown-item" href="Pag_Agua_HTML.php">Água</a></li>
                    <li><a class="dropdown-item" href="mapa.php">Mapa</a></li>

                </ul>
            </div>
        </div>
    </header>
    <div id="DivGeral">
        <h1 class="text-center">Login</h1>
        <form action="Login.php" method="POST">
            <div id="name">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
               </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
                 </div>
                 <div><a href="./PagAlteraSenha.php">Alterar Senha</a></div>
                <button type="submit" class="btn btn-primary">Login</button>                
            </div>
        </form>
        <a href="InsertRemedio.php" class="btn btn-primary" id="corbtn">Cadastro Remédio</a>
    </div>
</body>

</html>