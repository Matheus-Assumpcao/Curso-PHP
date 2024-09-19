<?php

    class Cachorro {

        function latir() {
            echo "AU AU AU AU <br>";
        }

        function andar($nome, $m) {
            echo "O $nome andou $m metros <br>";
        }
    }

    $bruce = new Cachorro;
    $bruce->latir();
    $bruce->andar("Bruce", 5);

    $grafite = new Cachorro;
    $grafite->latir();
    $grafite->andar("Grafite", 8);

?>