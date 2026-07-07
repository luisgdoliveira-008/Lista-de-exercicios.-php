<?php

function analisarTexto($texto) {
    $quantidadeCaracteres = strlen($texto);
    
    $quantidadePalavras = count(preg_split('/\s+/', trim($texto)));
    if (empty(trim($texto))) {
        $quantidadePalavras = 0;
    }

    $textoMinusculo = mb_strtolower($texto, 'UTF-8');
    
    $quantidadeVogais = preg_match_all('/[aeiouáéíóúâêîôûãõàèìòùäëïöü]/u', $textoMinusculo);
    
    $quantidadeConsoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyzç]/u', $textoMinusculo);
    
    return [
        'Quantidade de palavras'   => $quantidadePalavras,
        'Quantidade de caracteres' => $quantidadeCaracteres,
        'Quantidade de vogais'     => $quantidadeVogais,
        'Quantidade de consoantes' => $quantidadeConsoantes
    ];
}

$textoExemplo = "No dia em que o zilz amar denovo eu não estarei mais vivo.";
$estatisticas = analisarTexto($textoExemplo);

echo "<h3>Numeros do texto:</h3>";
echo "Texto: \"$textoExemplo\"<br><br>";
foreach ($estatisticas as $chave => $valor) {
    echo "<strong>$chave:</strong> $valor <br>";
}
?>
