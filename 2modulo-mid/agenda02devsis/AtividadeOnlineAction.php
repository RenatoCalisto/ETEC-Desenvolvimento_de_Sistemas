<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>GET e POST</title>
</head>

<body>

    <div class="w3-container w3-teal">
        <h2>Cadastro efetuado com sucesso</h2>
    </div>

<?php
echo "Nome: ".$_POST['nome']."<br>";
echo "Sobrenome: ".$_POST['sobrenome']."<br>";
echo "E-mail: ".$_POST['email']."<br>";
echo "Formação: ".$_POST['formacao']."<br>";
echo "Descrição Último Emprego: ".$_POST['descricaoultimoemprego']."<br>";
?>