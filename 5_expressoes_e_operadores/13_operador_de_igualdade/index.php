<?php

    if(3 == 3) {
        echo "Comparação verdadeira <br>";
    }

    if(3 == 4) {
        echo "Comparação verdadeira <br>";
    } else {
        echo "Comparação falsa <br>";
    }

    $a = 12;
    $b = 20;
    $c = 20;

    if($a == $b) {
        echo "Comparação verdadeira <br>";
    } else {
        echo "Comparação falsa <br>";
    }

    if($c == $b) {
        echo "Comparação verdadeira <br>";
    } else {
        echo "Comparação falsa <br>";
    }

    $nome = "Matheus";
    $nomeSistema = "Matheus";
    $sobreNome = "Assumpção";

    if($nome == $nomeSistema) {
        echo "O nome coincide <br>";
    } else {
        echo "O nome não coincide <br>";
    }

    if($nome = $nomeSistema) { // apenas o = não realiza a verificação e sim atribuição a variavel, 
        echo "O nome coincide <br>"; // poderia ser qualquer outro nome na variavel que ele iria passar como true
    } else {
        echo "O nome não coincide <br>";
    }

    if($nome == $sobreNome) {
        echo "O nome coincide <br>";
    } else {
        echo "O nome não coincide <br>";
    }
?>
