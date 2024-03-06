<?php

    echo "Testando texto de aspas dupla <br>";
    echo "Testando texto de aspas simples <br>";
    echo "Ele disse: 'Olá!' <br>";
    echo 'Ele disse: "Olá!" <br>';

    $idade = 15;

    echo "Ele tem $idade anos.<br>"; // aspas duplas interpretam variaveis
    echo 'Ele tem $idade anos.<br>'; // aspas simples não interpretam variaveis

?>