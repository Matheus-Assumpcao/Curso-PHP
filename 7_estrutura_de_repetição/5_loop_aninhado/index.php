<?php

    $x = 0;

    while($x <= 10) {

        echo "Loop externo $x <br>";

        $y = 1;

        while($y <= 5) {

            echo "Loop interno $y <br>";

            $y++;
            
        }

        $x++;

    }

?>