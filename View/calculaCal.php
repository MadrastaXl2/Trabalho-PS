<?php
include '../Model/CalculaCal.class.php';
include '../Model/Conexao.class.php'
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/Cabecalho.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Medfy</title>
</head>
<body>
<script src="View/JS/main.js"></script>
    <header>
            <div id="contato">
            <div id="contatoItens">
                Phone: <a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"> +1 292 3293 4238</a>
                Email: <a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ">info@yourdomain.com</a>
            </div>
        </div>
        <div id="menu">
            <div id="container">
            <img id="logo" id="darkModeToggle" src="IMGS/Logo Branca.png" alt="logo" width="4.5%">
                <ul id="itensMenu">
                <li>
                    <a href="../index.php">Home</a>
                </li>
                <li>
                        <a href="verRemedios.php">Ver Remedios</a>
                </li>
             
                <li>
                    <a href="Mapa.php">Mapa</a>
                </li>
                <li>
                    <a href="Pag_Agua_HTML.php">Agua</a>
                </li>
                <li>
                    <a href="calculaCal.php">Calculadora de calorias</a>
                </li>
                </ul>
                <div id="ParteFinalCabecalho">
                    <img src="./IMGS/Usuario.png" class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" width="50%" alt="Usuário">
                        <div class="dropdown">
                            <!-- Corrigido o botão do dropdown -->
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Login.php">Login</a></li>
                                <li><a class="dropdown-item" href="InsereUsuario.php">Cadastro de usuário</a></li>
                                <li><a class="dropdown-item" href="InsereRemedio.php">Cadastro de Remédio</a></li>
                                <li><a class="dropdown-item" href="faleConosco.php">Fale Conosco</a></li>
                                <li><a class="dropdown-item" href="VerUsuario.php">Informações do usuario</a></li>
                                <li><a class="dropdown-item"> <button id="darkModeToggle">Modo escuro</button></a></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </header>
<main>
    <div id="geral">
        <h1 class="text-center">Calculadora Calorias</h1>
        <form method="POST">
        <label for="atividade">Atividade:</label>
            <select name="atividade" id="atividade">
                <option value="corrida">Corrida</option>
                <option value="caminhada">Caminhada</option>
                <option value="ciclismo">Ciclismo</option>
                <option value="natação">Natação</option>
                <option value="musculação">Musculação</option>
            </select>
            <div class="mb-3">
                <label for="duracao" class="form-label">Duração - Minutos</label>
                <input type="int" class="form-control" name="duracao" id="duracao">
            </div>
            <div class="mb-3">
                <label for="peso" class="form-label">Seu peso - Kg</label>
                <input type="number" class="form-control" name="peso" id="peso">
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['peso']) && !empty($_POST['atividade']) && !empty($_POST['duracao'])) {
            
            $CalculoCalorias = new calculaCalorias();   
            echo "O total de calorias gastos foi: "; 
            echo $CalculoCalorias -> calculaCal( $_POST['peso'], $_POST['atividade'], $_POST['duracao']);
            
        } else {
            echo "<h2>Todos os campos precisam estar preenchidos</h2>";
        }

    }
        
        
    ?>
</main>
   <footer>
        <div id="conteudo_footer">
            <div id="contatos_footer">
                <h1>MedFy</h1>
                <p>Sua Saúde, Nossa Prioridade</p>

                <div id="redes_sociais_footer">
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="footer-link" id="Twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>

                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="footer-link" id="Whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

                <ul class="lista_footer">
                    <li>
                        <h3>Emergência</h3>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="footer-link">Números de Emergência</a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="footer-link">Localização de Hospitais Próximos</a>
                    </li>
                </ul>

                <ul class="lista_footer">
                    <li>
                        <h3>Blog</h3>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="footer-link">Beba Água</a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="footer-link">Quantas Calorias Você Já perdeu?</a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="footer-link">Já tomou seus remédios?</a>
                    </li>
                </ul>
            <div id="footer_subscribe">
                <h3>Se Inscreva</h3>

                <p>
                    Escreva seu e-mail para ser notificado de novas funcionalidades
                </p>

                <div id="input_group">
                    <input type="email" id="email"> 
                   <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><button><i class="fa-solid fa-square-envelope"></i></button></a>
                </div>
            </div>

        </div>
        <div id="footer_copyright">
            &#169 2024 all rights reserved MedFy
        </div>
    </footer>
</body>
</html>