<?php
$pdo = new PDO('mysql:host=localhost;dbname=pit', 'root', '');
$sql = "SELECT * FROM usuario where id = 1";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
$linhas = $stmt->rowCount();
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Mainpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MedFy</title>
    <style>
        footer{
            margin-top: 50vh;
        }
    </style>
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
            <a href="">Fale conosco</a>
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
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col">Idade</th>
                <th scope="col">Sexo</th>
                <th scope="col" class="text-center" colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($linhas) : ?>
                <?php foreach ($resultado as $r) : ?>
                    <tr>
                        <td><?= $r['id'] ?></td>
                        <td><?= $r['nome'] ?></td>
                        <td><?= $r['email'] ?></td>
                        <td><?= $r['senha'] ?></td>
                        <td><?= $r['idade'] ?></td>
                        <td><?= $r['sexo'] ?></td>
                        <td><a href="atualiza.php?id=<?= $r['id'] ?>" class="btn btn-warning padding"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="delete.php?id=<?= $r['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="5">Não há dados</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
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