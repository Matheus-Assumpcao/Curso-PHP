<?php

    function defineCorCarro($cor = "Vermelho") {

        return "A cor do carro é: $cor <br>";

    }

    $carroVerde = defineCorCarro("Verde");
    echo $carroVerde;
    ]
    $carroVermelho = defineCorCarro(); //Default
    echo $carroVermelho;

?>