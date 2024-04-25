<?php

    $str = "Estamos testando o metodo strpos, com o strpos podemos encontrar strings";
    $testeEcontrar = strpos($str, "strpos");

    echo $testeEcontrar . "<br>";

    $testeEcontrar2 = strpos($str, "Java");

    echo $testeEcontrar2 . "<br>";

    if($testeEcontrar2 === false) {
        echo "Palavra não encontrada <br>";
    }

    $palavra = "com";
    $testeEcontrar3 = strpos($str, $palavra);

    echo $testeEcontrar3 . "<br>";

    $palavra2 = "to";
    $testeEcontrar4 = strpos($str, $palavra2);

    echo $testeEcontrar4 . "<br>";

?>