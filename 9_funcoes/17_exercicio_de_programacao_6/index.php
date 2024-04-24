<?php

    function countVowels($palavra) {
        
        $arrVogais = ["a", "e", "i", "o", "u"];
        $contagem = 0;
        
        for($i = 0; $i < count($arrVogais); $i++) {
            if(strpos($palavra, $arrVogais[$i]) !== false) {
                $contagem++;
            }
        }

        echo "Na palavra \"$palavra\" há $contagem vogais";
    }
    
    countVowels("Paralelepipedo");

?>