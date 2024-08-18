<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/MainPage.css">
    <title></title>
</head>
<body>
<header id="cabecalho">
        <div id="imgLogo"> <!--Div da logo-->
            <img src="../IMGS/Logo.png" width="15%" alt="logo">
            <h10 id="RemediosJa">Remédios Já</h10>
        </div>
        <div id="textos_do_meio">
            <a href="../index.php">Sobre nós</a>
            <a href="../index.php">O que fazemos</a>
            <a href="">Fale conosco</a>
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
            
            $peso = $_POST['peso'];
            $atividade = $_POST['atividade'];
            $duracao = $_POST['duracao'];
    
            $calorias = calcularCalorias($peso, $atividade, $duracao);
            echo "<h2>Você queimou aproximadamente " . round($calorias, 2) . " calorias.</h2>";
        } else {
            echo "<h2>Todos os campos precisam estar preenchidos</h2>";
        }

    }
        function calcularCalorias($peso, $atividade, $duracao){

            $metTabela = [
                'corrida' => 9.8,
                'caminhada' => 3.8,
                'ciclismo' => 7.5,
                'natação' => 8.0,
                'musculação' => 6.0,
            ];
            $met = $metTabela[$atividade];
            $caloriasQueimadas = ($met * $peso * $duracao)/60;


            return $caloriasQueimadas;
        }
        
    ?>
</body>