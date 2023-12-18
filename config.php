<?php 

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassaword = '';
    $dbName = 'farmacia';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassaword,$dbName);

    //($conexao->connect_errno)
    //{
    //    echo "Erro";
    //}
    //else
    //{
    //    echo "Efetuado com sucesso";
    //}

?> 