<?php

    $arr = ['banana', 'maça', 'batata', 'pera', 'mamao'];

    if(in_array("banana", $arr)) {
        echo "Há o item banana no array <br>";
    } else {
        echo "Não há o item banana no array <br>";
    }

    $b = "batata";

    if(in_array($b, $arr)) {
        echo "Há o item $b no array <br>";
     } else {
        echo "Não há o item $b no array <br>";
     }

     if(in_array("teste", $arr)) {
        echo "Há o item teste no array <br>";
     } else {
        echo "Não há o item teste no array <br>";
     }

?>