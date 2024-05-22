<?php

    $pessoa = ["Matheus", 22, "Programador", "São Paulo FC"];

    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $profissao, $timeDoCoracao) = $pessoa;

    echo $nome . "<br>";
    echo $idade . "<br>";
    echo $profissao . "<br>";
    echo $timeDoCoracao . "<br>";

?>