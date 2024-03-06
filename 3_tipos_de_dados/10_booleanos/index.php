<?php

    // 0, 0.0, "0", [], NULL. São valores False.

    echo true;
    echo "<br>";
    echo false;

    if(true) {
        echo "É verdadeiro! <br>";
    }

    if(5 > 2) { // true
        echo "É verdadeiro! <br>";
    }

    $podeEntrar = true;

    if($podeEntrar) {
        echo "O usuario pode entrar";
    }
?>