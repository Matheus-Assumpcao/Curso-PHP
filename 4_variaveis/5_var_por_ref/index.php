<?php

    $x = 10;

    $y =& $x;

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y = 15;

    echo "<br>";
    echo "Atribuição após ref";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $x = 20;

    echo "<br>";
    echo "Atribuição após ref2";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $nome = "Matheus";
    $nome2 =& $nome;

    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";

    $nome2 = "Daphne";

    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";

?>