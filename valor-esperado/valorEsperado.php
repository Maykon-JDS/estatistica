<?php


$valoresEsperados = [[1,1/10],[2,1/15],[4,1/42.86],[5,1/75], [1000,1/40000]];


function valorEsperado($dados){
    $soma = 0;
    foreach($dados as $dado){
        $soma += $dado[0] * $dado[1];
    }
    return $soma;
}

echo valorEsperado($valoresEsperados);

?>