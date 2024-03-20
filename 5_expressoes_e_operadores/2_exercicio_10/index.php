<?php

    $num1 = 100;
    $num2 = 500;
    $num3 = 700;
    $num4 = 1000.5;

    $resultado1 = $num3 - $num1 / $num2;
    $resultado2 = ($num2 - $num1) / ($num3 * $num4);
    $resultado3 = $num4 * ($num3 - $num2) / $num1;

    echo $resultado1;
    echo "<br>";
    echo $resultado2;
    echo "<br>";
    echo $resultado3;

?>