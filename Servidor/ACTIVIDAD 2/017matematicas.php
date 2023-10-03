<?php
/* Añade las siguientes funciones:
digitos(int $num): int ‚ devuelve la cantidad de dígitos de un número.
digitoN(int $num, int $pos): int‚ devuelve el digito que ocupa, empezando por la izquierda, la posición $pos.
quitaPorDetras(int $num, int $cant): int‚ le quita por detrás (derecha) $cant digitos.
quitaPorDelante(int $num, int $cant): int‚ le quita por delante (izquierda) $cant digitos.
Para probar las funciones, haz uso tanto de paso de argumentos posicionales como argumentos con nombre.
*/

function digitos(int $num): int {
    return strlen((string)$num); //Creamos una funcion que te devuelve la longitud de un String
}

function digitoN(int $num, int $pos): int { //Creamos una funcion que te devuelve el digito en x posicion
    $numString = (string)$num;
    
    if ($pos >= 1 && $pos <= strlen($numString)) {
        return (int)$numString[$pos - 1]; //Devolvemos el digito en la posicion que el usuario indique
    } else {
        return -1; 
    }
}


function quitaPorDetras(int $num, int $cant): int {
    $numString = (string)$num; 
    return (int)substr($numString, 0, -$cant);
    //Usamos la funcion subString para obtener todos los caracteres menos los ultimos indicados
}


function quitaPorDelante(int $num, int $cant): int {
    $numString = (string)$num;
    //Usamos la funcion subString para obtener todos los caracteres menos los primeros indicados
    return (int)substr($numString, $cant);
}


$num = 123456789;
//Llamamos a todas las funciones y las mostramos 
echo "Cantidad de dígitos en $num: " . digitos($num) . "<br>";
echo "Dígito en la posición 3 de $num: " . digitoN($num, 3) . "<br>";

$numSinUltimosDosDigitos = quitaPorDetras($num, 2);
echo "Quitar los últimos dos dígitos de $num: $numSinUltimosDosDigitos <br>";

$numSinPrimerTresDigitos = quitaPorDelante($num, 3);
echo "Quitar los primeros tres dígitos de $num: $numSinPrimerTresDigitos <br>";
?>