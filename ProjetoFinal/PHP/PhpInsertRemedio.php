<?php

$nome = trim($_POST['nome']); // o trim tira os espaços antes e depois da string
$horario = trim($_POST['horario']); 
$data = trim($_POST['data']);

$resposta; // criar a variavel resposta por segurança
try {
    // abrir conexão

$pdo = new PDO('mysql:host=localhost;dbname=pit','root','');

// Preparação da Query(comando)
$sql = "INSERT INTO remedio VALUES(NULL,:nome,:horario,:data)";
// Pomando para preparar a query
$stmt = $pdo->prepare($sql);
// coloca no coringa o valor da variavel
$stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
$stmt->bindParam(':email',$horario,PDO::PARAM_STR);
$stmt->bindParam(':data',$data, PDO::PARAM_STR);


//PDO::PARAM_STR é para falar q o paramentro e string 

//Executar a query
$resposta = $stmt->execute();
} catch (PDOException $e) {
    $resposta = $e->getMessage("");
}

//passa as informações para o index
header("Location: index.php?resposta=".$resposta);

?>