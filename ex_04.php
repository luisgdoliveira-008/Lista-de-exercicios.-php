<?php

function gerarSenha($tamanho) {
    $maiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $minusculas = 'abcdefghijklmnopqrstuvwxyz';
    $numeros = '0123456789';
    $especiais = '!@#$%^&*()-_=+[]{}|;:,.<>?';
    
    $caracteresPermitidos = $maiusculas . $minusculas . $numeros . $especiais;
    
    $senha = '';
    $totalCaracteres = strlen($caracteresPermitidos);
    
    for ($i = 0; $i < $tamanho; $i++) {
        $indiceAleatorio = rand(0, $totalCaracteres - 1);
        $senha .= $caracteresPermitidos[$indiceAleatorio];
    }
    
    return $senha;
}

echo "Senha gerada: " . gerarSenha(10);
?>