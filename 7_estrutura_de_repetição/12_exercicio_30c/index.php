<?php

    $arr = [];
    $i = 10;

    for($i; $i <= 20; $i++) {

        array_push($arr, $i);

    }

    print_r($arr );
    echo "<br>";

    for($i = 0; $i < count($arr); $i++) {

        if($arr[$i] % 2 != 0) {
            echo "Números Impares: $arr[$i] <br>";
        }
    }

?>