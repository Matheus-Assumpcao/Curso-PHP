<?php

    function sumEvenNumbers($x) {
        
        $i = 0;
        $soma = 0;
        for($i; $i <= $x; $i++) {
            if($i % 2 == 0){
                $soma += $i;
            }
        }
        
        return $soma;
    }
    
    echo sumEvenNumbers(8);
