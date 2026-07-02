<?php

function inverterTexto($texto) {
    echo "Quantidade de caracteres: " . strlen ($texto) . "<br>"; 
    return strrev($texto);
}
$stringOriginal = "Eduardogay";
$resultado = inverterTexto($stringOriginal);

echo " Texto invertido: " . $resultado ;

?>