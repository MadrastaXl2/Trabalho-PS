<?php
require_once '../Model/ManagerRemedio.class.php';
require_once '../Model/RemedioDAO.php';
require_once '../Model/Remedio.php';

$remedios = new RemediosDAOImpl;

$dados = $remedios->getUmRemedio($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualiza Remedio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<form method="POST" action="../Controller/Remedio/update_remedio.php">
    <h1 class="text-center">Atualiza Remédio</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id</label>
    <input type="text" class="form-control" name="id" id="id" value="<?php echo $_GET['id']?>" readonly>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" name="name" id="inputNome" value="<?php echo $dados[0]['nome']?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Horario</label>
    <input type="text" class="form-control" name="horario" id="inputHorario" value="<?php echo $dados[0]['horario']?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Data</label>
    <input type="date" class="form-control" name="data" id="inputHorario" value="<?php echo $dados[0]['data']?>">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>