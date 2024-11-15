<?php
require_once '../Model/ManagerRemedio.class.php';
require_once '../Model/RemedioDAO.php';
require_once '../Model/Remedio.php';

$remedios = new RemediosDAOImpl;


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
<form method="$_POST" action="../Controller/Remedio/update_remedio.php">
    <h1 class="text-center">Atualiza Remédio</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id</label>
    <input type="text" class="form-control" id="id" values="<?php echo $remedios->getUmRemedio($remedio['id'])?>" readonly>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputNome" values="<?php echo $remedios->getUmRemedio($remedio['nome'])?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Horario</label>
    <input type="text" class="form-control" id="inputHorario" values="<?php echo $remedios->getUmRemedio($remedio['horario'])?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Data</label>
    <input type="date" class="form-control" id="inputHorario" values="<?php echo $remedios->getUmRemedio($remedio['data'])?>">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>