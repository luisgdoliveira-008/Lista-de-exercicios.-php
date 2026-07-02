<?php

function inverterTexto($texto) {
    echo "Quantidade de caracteres: " . strlen ($texto); 
    return strrev($texto);
}
$stringOriginal = "Eduardogay";
$resultado = inverterTexto($stringOriginal);

echo " Texto invertido: " . $resultado . "\n";

?>