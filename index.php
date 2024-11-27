<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../Trabalho-PS/View/CSS/Cabecalho.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    <header>
            <div id="contato">
            <div id="contatoItens">
                Phone: <a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"> +1 292 3293 4238</a>
                Email: <a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ">info@yourdomain.com</a>
            </div>
        </div>
        <div id="menu">
            <div id="container">

                    <img id="logo" id="darkModeToggle" src="View/IMGS/Logo Branca.png" alt="logo" width="4.5%">

                <ul id="itensMenu">
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                        <a href="../Trabalho-PS/View/verRemedios.php">Ver Remedios</a>
                </li>
             
                <li>
                    <a href="../Trabalho-PS/View/Mapa.php">Mapa</a>
                </li>
                <li>
                    <a href="../Trabalho-PS/View/Agua.php">Agua</a>
                </li>
                <li>
                    <a href="calculaCal.php">Calculadora de calorias</a>
                </li>
                </ul>
                <div id="ParteFinalCabecalho">
                    <img src="View/IMGS/Usuario.png" class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" width="50%" alt="Usuário">
                        <div class="dropdown">
                            <!-- Corrigido o botão do dropdown -->
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../Trabalho-PS/View/Login.php">Login</a></li>
                                <li><a class="dropdown-item" href="../Trabalho-PS/View/InsereUsuario.php">Cadastro de usuário</a></li>
                                <li><a class="dropdown-item" href="../Trabalho-PS/View/InsereRemedio.php">Cadastro de Remédio</a></li>
                                <li><a class="dropdown-item" href="../Trabalho-PS/View/faleConosco.php">Fale Conosco</a></li>
                                <li><a class="dropdown-item" href="../Trabalho-PS/View/verUsuario.php">Informações do usuario</a></li>
                                <li><a class="dropdown-item" href="../Trabalho-PS/View/AlteraSenha.php">Alterar a Senha</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </header>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="View/IMGS/BannerMedFy1.png" class="d-block w-100" alt="...">
            </div>
            
            <div class="carousel-item">
                <img src="View/IMGS/BannerMedFy.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        
        <!--  <p class="digitacao">MedFy: Sua Saúde, Nossa Prioridade</p>-->
         <!-- Botão centralizado -->
        

    </div>
    <main>
        <section id="quem-somos">
            <div class="container">
                <div id="texto-quem-somos">
                    <h2>O que fazemos</h2>
                    <p>
                         Na <strong>MedFy</strong>, entendemos a importância vital de manter a regularidade no uso de medicamentos para garantir a saúde e o bem-estar. Nossa missão é simplificar e melhorar a vida de nossos clientes, garantindo que nunca percam o horário de seus remédios.
                    </p>
                    <p>
                        Com a nossa inovadora tecnologia, oferecemos um serviço que vai além de simples lembretes. Desenvolvemos um sistema completo e intuitivo que ajuda na manutenção de seu cronograma de medicação, proporcionando tranquilidade e segurança para você e seus entes queridos.
                    </p>
                </div>
                <div id="imagem-quem-somos">
                    <img src="https://images.pexels.com/photos/3094215/pexels-photo-3094215.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Imagem Quem Somos">
                </div>
            </div>
        </section>
    
        <section id="sobre-nos">
            <div class="container">
                <div id="texto-sobre-nos">
                    <h2>Sobre Nós</h2>
                    <p>
                        Nosso compromisso é com a sua saúde e bem-estar. Reconhecemos a importância da adesão correta ao tratamento médico, e por isso, trabalhamos para facilitar ao máximo essa tarefa. Sabemos que manter uma rotina de medicação pode ser desafiador, mas estamos aqui para transformar essa experiência, tornando-a mais simples, prática e eficiente.
                    </p>
                    <p>
                        Convidamos você a nos acompanhar nessa jornada e descobrir como podemos contribuir para uma vida mais saudável, com mais tranquilidade e eficácia no cuidado com sua saúde. Conte com a <strong>MedFy</strong> para simplificar o seu dia a dia e garantir que seu tratamento seja seguido de forma adequada.
                    </p>
                </div>
                <div id="imagem-sobre-nos">
                    <img src="https://images.pexels.com/photos/576831/pexels-photo-576831.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Imagem Sobre Nós">
                </div>
            </div>
        </section>
    </main>

   <p id="text-ava">Avaliações: </p> 
<div class="container-das-avaliacoes">
    <section id="avaliacoes">
        <div class="avaliacao-container">
            <div class="avaliacao-texto">
                <div class="avaliacao-texto-left">
                    <p>
                        “Estou completamente encantada com o site Medfy! Desde que comecei a usar, minha vida melhorou significativamente!“
                    </p>
                    <div class="avaliacao-assinatura">
                        <p>- George Lavarini</p>
                    </div>
                </div>
                <div class="avaliacao-texto-right">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQC7ED6EXmcYSf06hiuOHEuJsZwoKAUVxwi9pYd0omEHlK83e16EUEL65LQNE206iuUIlw&usqp=CAU" alt="Imagem de avaliação" />
                </div>
            </div>
        </div>
    </section>
    
    
    <section id="avaliacoes-1">
    <div class="avaliacao-container-1">
        <div class="avaliacao-texto-1">
            <div class="avaliacao-texto-left-1">
                <p>
                    “Desde que comecei a usar o serviço, não perdi nenhuma dose. Além disso, a interface é extremamente intuitiva e amigável, o que torna toda a experiência muito agradável.“
                </p>
                <div class="avaliacao-assinatura-1">
                    <p>- Cleber dos Santos</p>
                </div>
            </div>
            <div class="avaliacao-texto-right-1">
                <img src="data:image/jpeg;base64,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" alt="Imagem de avaliação" />
            </div>
        </div>
    </div>
</section>

<section id="avaliacoes-2">
    <div class="avaliacao-container-2">
        <div class="avaliacao-texto-2">
            <div class="avaliacao-texto-left-2">
                <p>"Usar o aplicativo da Medfy transformou minha rotina de medicação. Os alarmes me ajudam a nunca esquecer os remédios, e o app é muito fácil de usar. Agora, sigo meu tratamento com tranquilidade e sem preocupações!"</p>
                <div class="avaliacao-assinatura-2">
                    <p>- Duda Rubert</p>
                </div>
            </div>
            <div class="avaliacao-texto-right-2">
                <img src="https://i.pinimg.com/originals/4c/20/2b/4c202b6376037a5fc660a6c7b6e55661.jpg" alt="Papai Amogus">
            </div>
        </div>
    </div>
</section>
</div>
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