<?php

function ordenarNomes($stringNomes) {
    $vetorNomes = explode(',', $stringNomes);
    
    $vetorNomes Limpo = array_map('trim', $vetorNomes);
    
    sort($vetorNomesLimpo);
    
    return $vetorNomesLimpo;
}

$listaAlunos = "Carlos,  Ana, Bruno, Mariana ,Amanda";

$listaOrdenada = ordenarNomes($listaAlunos);

echo "<pre>";
print_r($listaOrdenada);
echo "</pre>";

?>