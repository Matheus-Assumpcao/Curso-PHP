<?php

    $carAssoc = [
        'marca' => 'Toyota', 
        'modelo' => 'Yaris', 
        'cor' => 'Vermelho', 
        'ano' => 2019,
        'teto_solar' => true,
        'blindado' => false
    ];

    print_r($carAssoc);
    echo "<br>";
    echo $carAssoc['marca'];
    echo "<br>";
    echo $carAssoc['modelo'];
    echo "<br>";
    echo $carAssoc['cor'];
    echo "<br>";
    echo $carAssoc['ano'];
    echo "<br>";

    $marca = $carAssoc['marca'];
    $modelo = $carAssoc['modelo'];
    $ano = $carAssoc['ano'];
    $cor = $carAssoc['cor'];

    echo "O $modelo é da $marca, ele é $ano e da cor $cor.";

?>