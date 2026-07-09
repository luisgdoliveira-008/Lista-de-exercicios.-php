<?php

function calcularMedia($notas) {
    if (empty($notas)) {
        return "Nenhuma nota informada.";
    }

    $maiorNota = max($notas);
    $menorNota = min($notas);

    $soma = array_sum($notas);
    $quantidade = count($notas);
    $media = $soma / $quantidade;

    if ($media >= 7.0) {
        $situacao = "Aprovado";
    } elseif ($media >= 5.0) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return [
        'maiorNota' => $maiorNota,
        'menorNota' => $menorNota,
        'media' => round($media, 2), 
        'situacao' => $situacao
    ];
}

$notasAluno = [8.5, 6.0, 7.2, 5.5];
print_r(calcularMedia($notasAluno));
?>