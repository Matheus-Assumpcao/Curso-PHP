<?php

    $arr = ["Carro", "Moto", "Barco", "Avião"];
    $str = implode(", ", $arr);

    echo $str . "<br>";

    $arr = ["Carro", "Moto", "Barco", "Avião"];
    $str2 = implode("<-> ", $arr);

    echo $str2 . "<br>";

?>