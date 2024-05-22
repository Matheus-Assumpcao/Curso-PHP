<?php

    $arr = [
        'cor' => 'azul',
        'forma' => 'retangular',
        'material' => 'plastico'
    ];

    extract($arr);

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";

    // CUIDADO PARA NÃO TER VARIAVEIS DO MESMO NOME QUANDO FOR FAZER EXTRACT, POIS, 
    // A VARIAVEL DA FUNÇÃO SOBREESCREVE A OUTRA VARIAVEL COM MESMO NOME
    $nome = "Matheus";

    $pessoa = [
        'nome' => 'João',
        'idade' => 22
    ];

    echo "$nome <br>";

    extract($pessoa);

    echo "$nome <br>";
    echo "$idade <br>";
?>