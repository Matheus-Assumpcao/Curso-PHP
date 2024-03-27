<?php

    $velocidade_carro = 50;
    $velocidade_permitida = 40;

    if($velocidade_carro < $velocidade_permitida) {

        echo "Velocidade dentro do permitido";

    } elseif($velocidade_carro == $velocidade_permitida) {

        echo "Cuidado! Velocidade permitida é 40 km/h";

    } elseif($velocidade_carro > $velocidade_permitida) {

        echo "ACIMA DA VELOCIDADE PERMITIDA, TOMOU MULTA!";
    }

?>