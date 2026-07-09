<?php

function calcularDesconto($valorTotal) {
    $percentualDesconto = 0;

    if ($valorTotal > 1000) {
        $percentualDesconto = 0.30; 
    } elseif ($valorTotal > 500) {
        $percentualDesconto = 0.20; 
    } elseif ($valorTotal > 100) {
        $percentualDesconto = 0.10;
    } else {
        $percentualDesconto = 0;    

    $valorDesconto = $valorTotal * $percentualDesconto;
    $valorFinal = $valorTotal - $valorDesconto;

    return [
        'valorOriginal' => $valorTotal,
        'descontoAplicado' => $valorDesconto,
        'valorFinal' => $valorFinal
    ];
}

$resultado = calcularDesconto(600.00);

echo "Valor Original: R$ " . number_format($resultado['valorOriginal'], 2, ',', '.') ;
echo "Desconto Aplicado: R$ " . number_format($resultado['descontoAplicado'], 2, ',', '.') ;
echo "Valor Final: R$ " . number_format($resultado['valorFinal'], 2, ',', '.');

?>