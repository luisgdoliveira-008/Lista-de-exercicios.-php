<?php

function analisarNumero($numero) {
    $parOuImpar = ($numero % 2 == 0) ? "Par" : "Ímpar";

    $ehPrimo = true;
    if ($numero <= 1) {
        $ehPrimo = false;
    } else {
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $ehPrimo = false;
                break;
            }
        }
    }
    $primoResultado = $ehPrimo ? "Primo" : "Não é primo";

    $somaDivisores = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $somaDivisores += $i;
        }
    }
    $perfeitoResultado = ($somaDivisores == $numero && $numero > 0) ? "Perfeito" : "Não é perfeito";

    return [
        'numero' => $numero,
        'paridade' => $parOuImpar,
        'primo' => $primoResultado,
        'perfeito' => $perfeitoResultado
    ];
}

print_r(analisarNumero(6));
?>
