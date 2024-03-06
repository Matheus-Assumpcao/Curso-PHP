<?php

    class Pessoa {

        function falar() {
            echo "Ola Pessoal";
        }
    }

    $matheus = new Pessoa();
    $matheus->nome = "Matheus";

    echo $matheus->nome;
    echo "<br>";

    $matheus->falar();
    
?>