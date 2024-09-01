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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../MainPage.css">
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
        <img src="../IMGS/Usuario.png" class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" width="50%" alt="Usuário">
            <div class="dropdown">
                <!-- Corrigido o botão do dropdown -->                
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./PAGS/LoginHtml.php">Login</a></li>
                    <li><a class="dropdown-item" href="./PAGS/PagInsert.php">Cadastro de usuário</a></li>
                    <li><a class="dropdown-item" href="./PAGS/InsertRemedio.php">Cadastro de Remédio</a></li>
                    <li><a class="dropdown-item" href="./PAGS/usoInfo.php">Informações do usuário</a></li>
                    <li><a class="dropdown-item" href="./PAGS/calculaCal.php">Calculadora de calorias</a></li>
                    <li><a class="dropdown-item" href="./PAGS/Pag_Agua_HTML.php">Água</a></li>
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

<footer>
        <div id="conteudo_footer">
            <div id="contatos_footer">
                <h1>MedFy</h1>
                <p>Sua Saúde, Nossa Prioridade</p>

                <div id="redes_sociais_footer">
                    <a href="https://www.instagram.com/pedridao/" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="Twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>

                    <a href="https://web.whatsapp.com" class="footer-link" id="Whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

                <ul class="lista_footer">
                    <li>
                        <h3>Emergência</h3>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Números de Emergência</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Localização de Hospitais Próximos</a>
                    </li>
                    <!--<li>
                        <a href="#" class="footer-link">Penis</a>
                    </li>-->
                </ul>

                <ul class="lista_footer">
                    <li>
                        <h3>Blog</h3>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Beba Água</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Quantas Calorias Você Já perdeu?</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Já tomou seus remédios?</a>
                    </li>
                </ul>
            <div id="footer_subscribe">
                <h3>Se Inscreva</h3>

                <p>
                    Escreva seu e-mail para ser notificado de novas funcionalidades
                </p>

                <div id="input_group">
                    <input type="email" id="email"> 
                    <button><i class="fa-solid fa-square-envelope"></i></button>
                </div>
            </div>

        </div>
        <div id="footer_copyright">
            &#169 2024 all rights reserved MedFy
        </div>
    </footer>
</body>