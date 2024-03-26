<?php

    if(10 > 2) {

        echo "Entrou no primeiro if <br>";

        if("teste" == "teste") {

            echo "Entrou no segundo if <br>";
        }

    }

    if(10 > 2) {

        echo "Entrou ni primeiro if <br>";

        if("teste" != "teste") {

            echo "Entrou no segundo if <br>";
        } 
        else {

            echo "Entrou no segundo else<br>";

        }

    }

    $escopo = 10;

    if(10 > 2) {

        echo "Entrou no terceiro if <br>";

        $escopo2 = 20;

        if("teste" == "teste") {

            echo "Entrou no terceiro if <br>";

            echo $escopo . "<br>";
            echo " " . $escopo2 . "<br>";
        } 
        else {

            echo "Entrou no terceiro else<br>";

        }

    }
    else {

        echo "Entrou no terceiro else";

    }

    if(10 < 2) {

        echo "Entrou no terceiro if <br>";

        $escopo2 = 20;

        if("teste" != "teste") {

            echo "Entrou no terceiro if <br>";

            echo $escopo;
            echo " " . $escopo2;
        } 
        else {

            echo "Entrou no terceiro else<br>";

        }

    }
    else {

        echo "Entrou no terceiro else";

    }

?>