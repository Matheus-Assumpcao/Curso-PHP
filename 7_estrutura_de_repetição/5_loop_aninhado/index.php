<?php

    $x = 0;

    $z = "variavel teste";

    while($x <= 10) {

        echo "Loop externo $x <br>";

        $y = 1;

        echo "$z <br>";

        while($y <= 5) {

            echo "Loop interno $y <br>";

            $y++;
            
        }

        $x++;

    }

?>