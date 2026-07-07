<?php

function converterTemperatura($valor, $origem, $destino) {
    $origem = strtoupper($origem);
    $destino = strtoupper($destino);

    switch ($origem) {
    case 'C':
        $celsius = $valor;
        break;
    case 'F':
        $celsius = ($valor - 32) * 5 / 9;
        break;
    case 'K':
        $celsius = $valor - 273.15;
        break;
    default:
    return "Escala de origem inválida. Use C, F ou K.";
    }

    switch ($destino) {
        case 'C':
            return $celsius;
        case 'F':
            return ($celsius * 9 / 5) + 32;
        case 'K':
            return $celsius + 273.15;
        default:
            return "Escala de destino inválida. Use C, F ou K.";
    }
}
echo converterTemperatura(100, 'C', 'F') . " °F\n"; 
echo converterTemperatura(32, 'F', 'C') . " °C\n"; 
echo converterTemperatura(0, 'C', 'K') . " K\n";   