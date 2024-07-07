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
        <link rel="stylesheet" href="./CSS/MainPage.css">
    <title>Remédios Já</title>
</head>

<body>
    <!-- Inicio Cabeçalho-->
    <header id="cabecalho">
        <div id="imgLogo"> <!--Div da logo-->
            <img src="./IMGS/Logo.png" width="15%" alt="logo">
            <h10 id="RemediosJa">Remédios Já</h10>
        </div>
        <div id="textos_do_meio">
            <a href="#sobreNos">Sobre nós</a>
            <a href="#titleFaz">O que fazemos</a>
            <a href="">Fale conosco</a>
        </div>
        <div id="ParteFinalCabecalho">
            <img id="tresListras" src="./IMGS/menu.png" alt="Tres listras" width="60%">
            <div class="dropdown">
                <img src="./IMGS/Usuario.png" type="button" data-bs-toggle="dropdown" aria-expanded="false" width="60%"
                    alt="Usuário">
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./PAGS/LoginHtml.php">Login</a></li>
                    <li><a class="dropdown-item" href="./Php/PagInsert.php">Cadastro de usuário</a></li>
                    <li><a class="dropdown-item" href="./PAGS/InsertRemedio.php">Cadastro de Remédio</a></li>
                    <li><a class="dropdown-item" href="./PAGS/usoInfo.php">Informações do usuário</a></li>
                    
                </ul>
            </div>
        </div>
    </header>
    <div>
   <!-- BANNER -->
        <img src="./IMGS/ImagemBanner.png" width="100%" alt="">

    </div>

    <div id="oqFazemos">
        <div id="titleFaz">
            <h1>O que Fazemos</h1>
        </div>
        <div id="lineFaz"></div>
        <div id="conteudoFaz">
            <div id="txtFaz">
                Na <strong>Remedios Já!!!</strong>, entendemos a importância vital de manter a regularidade no uso de medicamentos para garantir a saúde e o bem-estar. Nossa missão é simplificar e melhorar a vida de nossos clientes, garantindo que nunca percam o horário de seus remédios.
Com a nossa inovadora tecnologia, oferecemos um serviço que vai além de simples lembretes. Desenvolvemos um sistema completo e intuitivo que ajuda na manutenção de seu cronograma de medicação, proporcionando tranquilidade e segurança para você e seus entes queridos.
            </div>
            <img src="./IMGS/medicoIcone.png" alt="icone medico">
        </div>
    </div>



    <div id="sobreNos">
        <div id="titleSN">
            <h1>Sobre Nós</h1>
        </div>
        <div id="lineSN"></div>
        <div id="txtSN">
            <h3>Na <strong>Remédios Já!!!</strong>, estamos comprometidos com sua saúde. Sabemos que a aderência ao
                tratamento é crucial, e estamos aqui para tornar essa tarefa o mais simples e eficiente possível.
                Junte-se a nós e descubra como podemos transformar sua rotina de medicação em uma experiência mais
                tranquila e eficaz.</h5>
        </div>
    </div>
    <div id="avaliacoes">
        <div id="titleAvaliacoes">
            <h1>Avaliações dos clientes</h1>
            <div id="lineAvaliacoes"></div>
        </div>
        <div id="customerRatings">
            <div class="geralClient">
                <div class="txtClient">
                    <h4>“Estou completamente encantada com o site Remedios Já! Desde que comecei a usar, minha vida
                        melhorou significativamente!“</h4>
                    <p><strong>- Juliana Bianchely</strong></p>
                </div>
                <img src="https://cdn.pixabay.com/photo/2014/09/03/03/54/beautiful-woman-434015_1280.jpg"
                    alt="foto mulher">
            </div>
            <div class="geralClient">
                <div class="txtClient">
                    <h4>“Desde que comecei a usar o serviço, não perdi nenhuma dose. A interface é extremamente
                        amigável, o
                        que torna toda a experiência muito agradável.“</h4>
                    <p><strong>- Peter Parker</strong></p>
                </div>
                <img src="https://lojadosherois.com.br/cdn/shop/files/1077732_1685915288095_800x.jpg?v=1685915306"
                    alt="foto homem">
            </div>
        </div>
    </div>
</body>

</html>