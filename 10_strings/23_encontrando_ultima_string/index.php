<?php

    $str = "Eu quero encontrar o strrpos usando o strrpos";
    $encontrandoUltimaStr = strrpos($str, "strrpos");

    echo $encontrandoUltimaStr . "<br>";

    $encontrandoUltimaStr2 = strpos($str, "strrpos");

    echo $encontrandoUltimaStr2 . "<br>";

    if(strrpos($str, "Java" === false)) {
        echo "String não encontrada <br>";
    }

    $p = substr($str, strpos($str, "strrpos"), 7);

    echo "$p <br>";

?>