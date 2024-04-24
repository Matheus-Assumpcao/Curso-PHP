<?php

    $arr = [
        "Carro" => 45000, 
        "Sofá" => 2000, 
        "Cafeteira" => 600
    ];

    function lojaDoSeuToba($arr) {

        $arrItensCaros = [];

        foreach($arr as $item => $preco) {

            if($preco > 10) {

                array_push($arrItensCaros, $item);

            }

        }

        return $arrItensCaros;

    }

    $novoArr = lojaDoSeuToba($arr);

    print_r($novoArr);

    
?>