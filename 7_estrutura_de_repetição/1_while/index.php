<?php

    // A definição do contador
    $x = 0;

    // Inicio da estrutura
    while($x < 10) {

        // Corpo do loop
        echo $x . "<br>";

        // Incremento do contador
        $x = $x + 1;
    }

    echo "Continue rodando... <br>";

    $y = 0;

    while($y <= 10) {

        echo $y . "<br>";

        $y += 2;
    }

    echo "Continue rodando... <br>";

    $z = 10;

    while($z > 0) {

        echo $z . "<br>";

        $z--;
    }

    echo "Continue rodando... <br>";

    $a = 10;

    while($a > 0) {

        if($a % 2 != 0) {
            echo $a . "<br>";
        }

        $a--;
    }

?>