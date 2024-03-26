<?php

    $numero = 20;
    $palavra = "Matheus";

    $valor_fixo = 100;

    if(is_numeric($numero)) {
        
        $multiplicacao = $numero * 2;
        
        if($multiplicacao > $valor_fixo) {

            echo "$multiplicacao é maior que $valor_fixo <br>";

        }
        else {
            echo "$multiplicacao é menor que $valor_fixo <br>";
        }
    }

    if(is_numeric($numero)) {
        
        $multiplicacao = $numero * 10;
        
        if($multiplicacao > $valor_fixo) {

            echo "$multiplicacao é maior que $valor_fixo <br>";

        }
        else {
            echo "$multiplicacao é menor que $valor_fixo <br>";
        }
    }

    if(is_numeric($palavra)) {
        
        $multiplicacao = $numero * 10;
        
        if($multiplicacao > $valor_fixo) {

            echo "$multiplicacao é maior que $valor_fixo <br>";

        }
        else {
            echo "$multiplicacao é menor que $valor_fixo <br>";
        }
    }
    else{
        echo "Não é um numero, é uma String";
    }

?>