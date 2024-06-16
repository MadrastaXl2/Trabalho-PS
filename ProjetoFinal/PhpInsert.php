<?php

$nome = trim($_POST['nome']); // o trim tira os espaços antes e depois da string
$email = trim($_POST['email']); 
$sexo = trim($_POST['sexo']);
$idade = trim($_POST['idade']);
$senha = trim($_POST['senha']);
$resposta; // criar a variavel resposta por segurança
try {
    // abrir conexão

$pdo = new PDO('mysql:host=localhost;dbname=pit','root','');

// Preparação da Query(comando)
$sql = "INSERT INTO usuario VALUES(NULL,:nome,:email,:sexo,:idade,:senha)";
// Pomando para preparar a query
$stmt = $pdo->prepare($sql);
// coloca no coringa o valor da variavel
$stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
$stmt->bindParam(':email',$email,PDO::PARAM_STR);
$stmt->bindParam(':sexo',$sexo, PDO::PARAM_STR);
$stmt->bindParam(':idade',$idade,PDO::PARAM_STR);
$stmt->bindParam(':senha',$senha, PDO::PARAM_STR);

//PDO::PARAM_STR é para falar q o paramentro e string 

//Executar a query
$resposta = $stmt->execute();
} catch (PDOException $e) {
    $resposta = $e->getMessage("");
}

//passa as informações para o index
header("Location: index.php?resposta=".$resposta);

?>