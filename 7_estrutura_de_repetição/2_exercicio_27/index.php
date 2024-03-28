<?php

    $a = ["Matheus", 22, "Daphne", 21, "João", 23, "Bruna", 28, "Lucas", 15];

    $x = count($a);
    $y = 0;

    while($y < $x) {

        if(is_string($a[$y])) {
            echo $a[$y] . "<br>";
        }

        $y++;

    }

?>