<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $assunto = addslashes($_POST['assunto']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "medifycotemig@gmail.com";
    $tema = "Mensagem em email - Medfy";

    $corpo = "Nome: ". $nome . "\n" . "Email: ". $email . "\n" . "Assunto: " . $assunto . "\n" . $mensagem;

    $cabeca = "From: teste@medfy.com" . "\n" . "Reply-to: " . $email . "\n" . "X=Mailer:PHP/" . phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("Email enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }

?>