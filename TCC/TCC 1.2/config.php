<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPasssword = 'conditions409';
    $dbName = 'formulario-tcc';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPasssword,$dbName);

/*if($conexao->connect_errno)
{
    echo "Erro";
}
else{
    echo "Conexão efetuada com sucesso";
}
*/

?>