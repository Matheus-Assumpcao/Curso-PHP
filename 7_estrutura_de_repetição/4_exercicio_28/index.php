<?php

    $x = 4;

    while($x <= 30) {

        echo "O X é $x <br>";

        if($x === 24) {

            echo "Parada forçada <br>";
            break;

        }

        $x += 2;

    }

    echo "O loop acabou...";

?>