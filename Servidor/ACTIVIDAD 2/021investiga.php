<?php
/*021investiga.php: Investiga las siguientes funciones de cadena
 (explica para qué sirven mediante comentarios, y programa un pequeño ejemplo de cada una de ellas):
  ucwords, strrev, str_repeat y md5. */

echo " <h1>ucwords</h1> ";

echo "La función ucwords convierte a mayúscula el primer carácter de cada palabra en una cadena.<br>";


$cadenaOriginal = "hola mundo";
$cadenaConMayusculas = ucwords($cadenaOriginal);

echo "Original: $cadenaOriginal<br>";
echo "Con Mayúsculas: $cadenaConMayusculas<br>";


echo " <h1>strrev</h1> ";

echo "La función strrev invierte una cadena<br>";


$cadenaOriginal = "Hola mundo";
$cadenaInvertida = strrev($cadenaOriginal);

echo "Original: $cadenaOriginal<br>";
echo "Invertida: $cadenaInvertida";

echo " <h1>str_repeat</h1>";

echo "La función str_repeat repite una cadena un número específico de veces.<br>";

$cadenaOriginal = "Hola";
$cadenaRepetida = str_repeat($cadenaOriginal, 3);

echo "Original: $cadenaOriginal<br>";
echo "Repetida 3 veces: $cadenaRepetida";


echo " <h1>md5</h1>";

echo "La función md5 devuelve el hash MD5 de una cadena. Es comúnmente utilizado para almacenar contraseñas de forma segura<br>";

$cadenaOriginal = "miContraseña";
$hashMd5 = md5($cadenaOriginal);

echo "Original: $cadenaOriginal<br>";
echo "Hash MD5: $hashMd5";
?>

