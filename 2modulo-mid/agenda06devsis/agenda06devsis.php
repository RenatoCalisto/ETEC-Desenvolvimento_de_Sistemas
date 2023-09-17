<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
 <title>Aluno Concluinte - MYSQLI</title>
</head>
<body class="w3-blue">
 <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-
margin">
 <h1 class="w3-center w3-text-white w3-cyan w3-round-large w3-
margin">Alunos Concluintes</h1>
 <table class="w3-table-all w3-centered w3-text-black">
 <thead>
 <tr class="w3-center w3-text-white w3-cyan ">
 <th>Código</th>
 <th>Nome</th>
 <th>Nota 1</th>
 <th>Nota 2</th>
 <th>Nota 3</th>
 <th>Nota 4</th>
 </tr>
 <thead>


<?php 
    $hostname = "localhost";
    $bancodedados = "pwii";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
/*  if ($mysqli->connect_errno) {
        echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
    }
    else{
        echo "Conectado ao Banco de Dados";
    }
*/

    $sql = "SELECT * FROM alunoconcluinte" ;
    $resultado = $mysqli->query($sql);
    if($resultado != null)
    foreach($resultado as $linha) {
    echo '<tr>';
    echo '<td>'.$linha['idalunoconcluinte'].'</td>';
    echo '<td>'.$linha['nome'].'</td>';
    echo '<td>'.$linha['nota1'].'</td>';
    echo '<td>'.$linha['nota2'].'</td>';
    echo '<td>'.$linha['nota3'].'</td>';        
    echo '<td>'.$linha['nota4'].'</td>';    
    echo '</tr>';
    }
    $mysqli->close();


?>