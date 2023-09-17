<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <title>Resultado</title>
</head>
<body>
<div class="w3-container w3-teal">
 <h1>
 <?php
 echo "PROMOÇÃO DE MÊS DE ANIVERSÁRIO! " . "<br>";
 echo $_POST['txtNome'] . "!" . "<br>";
 echo "Valor da Compra Sem Desconto: R$ " . $_POST['txtValorCompra'] . "<br>";
 echo "Forma de Pagamento Escolhida: " . $_POST['cmbPag'] . "<br>";

$DescontoDeposito = (90/100);
$DescontoBoleto = (92/100);

    if ($_POST['cmbPag'] == 'Depósito')
        {$ValorDeposito =  $_POST['txtValorCompra'] * $DescontoDeposito;
        echo "Desconto de 10%"  . "<br>"; 
        echo "Você economizou: R$ ".  $_POST['txtValorCompra'] - $ValorDeposito . "<br>";  
        echo "Valor à Pagar: R$ ". $ValorDeposito;
        }

    elseif ($_POST['cmbPag'] == 'Boleto') 
        {$ValorBoleto =  $_POST['txtValorCompra'] * $DescontoBoleto;
        echo "Desconto de 8%"  . "<br>"; 
        echo "Você economizou: R$ ".  $_POST['txtValorCompra'] - $ValorBoleto . "<br>";  
        echo "Valor à Pagar: R$ ". $ValorBoleto;
        }

    elseif ($_POST['cmbPag'] == 'Cartão de Crédito') 
        {echo "Sem Desconto" . "<br>"; 
        echo "Você economizou: R$ 0" . "<br>";  
        echo "Valor à Pagar: R$ ". $_POST['txtValorCompra'];
        }
 
 ?>
 </h1> 
</div>











 </body>



</html>