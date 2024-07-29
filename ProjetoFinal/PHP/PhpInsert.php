<?php
require "Classes.php";
$nome = trim($_POST['nome']); // o trim tira os espaços antes e depois da string
$email = trim($_POST['email']); 
$sexo = trim($_POST['sexo']);
$idade = trim($_POST['idade']);
$senha = trim($_POST['senha']);
$resposta; // criar a variavel resposta por segurança
try {
    // abrir conexão

 $pdo = new PDO('mysql:host=localhost;dbname=pit','root','');
$teste = new DBConnection();

// Preparação da Query(comando)
$sql = "INSERT INTO usuario VALUES(NULL,:nome,:email,:senha,:idade,:sexo)";
// Pomando para preparar a query
// coloca no coringa o valor da variavel
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
$stmt->bindParam(':email',$email,PDO::PARAM_STR);
$stmt->bindParam(':sexo',$sexo, PDO::PARAM_STR);
$stmt->bindParam(':idade',$idade,PDO::PARAM_STR);
$stmt->bindParam(':senha',$senha, PDO::PARAM_STR);


// $pdo->prepare($sql);


//PDO::PARAM_STR é para falar q o paramentro e string 

//Executar a query
$resposta = $stmt->execute();
} catch (PDOException $e) {
    $resposta = $e->getMessage("");
}

//passa as informações para o index
header("Location: ../index.php?resposta=".$resposta);

?>