<?php
/* Añade las siguientes funciones:
digitos(int $num): int ‚ devuelve la cantidad de dígitos de un número.
digitoN(int $num, int $pos): int‚ devuelve el digito que ocupa, empezando por la izquierda, la posición $pos.
quitaPorDetras(int $num, int $cant): int‚ le quita por detrás (derecha) $cant digitos.
quitaPorDelante(int $num, int $cant): int‚ le quita por delante (izquierda) $cant digitos.
Para probar las funciones, haz uso tanto de paso de argumentos posicionales como argumentos con nombre.
*/

function digitos(int $num): int {
    return strlen((string)$num);
}

function digitoN(int $num, int $pos): int {
    $numString = (string)$num;
    
    if ($pos >= 1 && $pos <= strlen($numString)) {
        return (int)$numString[$pos - 1];
    } else {
        return -1; 
    }
}


function quitaPorDetras(int $num, int $cant): int {
    $numString = (string)$num;
    return (int)substr($numString, 0, -$cant);
}


function quitaPorDelante(int $num, int $cant): int {
    $numString = (string)$num;
    return (int)substr($numString, $cant);
}

// Ejemplos de uso de las funciones
$num = 123456789;

echo "Cantidad de dígitos en $num: " . digitos($num) . "<br>";
echo "Dígito en la posición 3 de $num: " . digitoN($num, 3) . "<br>";

$numSinUltimosDosDigitos = quitaPorDetras($num, 2);
echo "Quitar los últimos dos dígitos de $num: $numSinUltimosDosDigitos <br>";

$numSinPrimerTresDigitos = quitaPorDelante($num, 3);
echo "Quitar los primeros tres dígitos de $num: $numSinPrimerTresDigitos <br>";
?>