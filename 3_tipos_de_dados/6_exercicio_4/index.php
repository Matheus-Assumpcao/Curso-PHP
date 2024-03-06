<?php

    $float1 = 2.5;
    $float2 = 3.59;
    $float3 = 8.1;
    $float4 = -59.7;

    echo $float1 + $float3;
    echo "<br>";
    echo $float3 - $float2;
    echo "<br>";
    echo $float2 + $float3;
    echo "<br>";
    echo $float4;
    echo "<br>";

    if(is_float($float1)){
        echo "É um float <br>";
    }

?>