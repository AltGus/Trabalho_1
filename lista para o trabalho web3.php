<?php
// 1) Substitua todas as vogais em uma string por asteriscos (*)
function substituirVogais($str) {
    return preg_replace('/[aeiouAEIOU]/', '*', $str);
}

// 2) Verifique se um número é primo ou não.
function ehPrimo($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

// 3) Inverta uma string sem usar a função strrev().
function inverterString($str) {
    $invertida = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $invertida .= $str[$i];
    }
    return $invertida;
}

// 4) Retorne se um número é positivo, negativo ou zero.
function verificarNumero($num) {
    return $num > 0 ? "Positivo" : ($num < 0 ? "Negativo" : "Zero");
}

// 5) Conte o número de palavras em uma frase e imprima cada palavra.
function contarPalavras($frase) {
    $palavras = explode(' ', $frase);
    echo "Total de palavras: " . count($palavras) . "\n";
    foreach ($palavras as $palavra) {
        echo $palavra . "\n";
    }
}

// 6) Verifique se uma palavra é um palíndromo.
function ehPalindromo($palavra) {
    $palavra = strtolower(preg_replace('/[^a-z]/', '', $palavra));
    return $palavra === inverterString($palavra);
}

// 7) Imprima os números de 1 a 20, substituindo múltiplos de 3 por 'x'.
function substituirMultiplosDeTres() {
    for ($i = 1; $i <= 20; $i++) {
        echo ($i % 3 == 0 ? 'x' : $i) . " ";
    }
}

// 8) Remova os espaços em branco de uma string.
function removerEspacos($str) {
    return str_replace(' ', '', $str);
}

// 9) Calcule e imprima os números Fibonacci até o décimo termo.
function fibonacci($termos = 10) {
    $fib = [0, 1];
    for ($i = 2; $i < $termos; $i++) {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
    }
    return implode(', ', $fib);
}

// 10) Verifique se um texto é um pangrama.
function ehPangrama($texto) {
    $alfabeto = range('a', 'z');
    $texto = strtolower(preg_replace('/[^a-z]/', '', $texto));
    return count(array_unique(str_split($texto))) == count($alfabeto);
}
