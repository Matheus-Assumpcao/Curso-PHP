<?php

    $ex1 = "5";
    $ex2 = 12;
    $operacao = $ex1 * $ex2; // autocast -> mudança implicita para int

    echo gettype($ex1) . "<br>";
    echo gettype($ex2) . "<br>";
    echo $operacao . "<br>";
    echo gettype($operacao);


?>