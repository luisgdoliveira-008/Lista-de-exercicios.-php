<?php

function mascararCpf(string $cpf): string {
    $tamanho = strlen($cpf);

    if ($tamanho <= 5) {
        return $cpf;
    }
    
    $quantidadeMascarar = $tamanho - 5;
    $parteEscondida = str_repeat('*', $quantidadeMascarar);
    $ultimosQuatro = substr($cpf, -5);
    return $parteEscondida . $ultimosQuatro;
}

$cpfFormatado = "123.456.789-01";
echo "Original: " . $cpfFormatado . "<br>";
echo "Mascarado: " . mascararCpf($cpfFormatado) . "<br>";

?>