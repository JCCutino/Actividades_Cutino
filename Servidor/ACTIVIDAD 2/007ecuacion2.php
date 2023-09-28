<?php
/*Crea un programa que resuelva una ecuación de 2º grado del tipo ax² + bx + c = 0. 
Ten en cuenta que puede tener 2, 1 o no tener solución dependiendo del valor del discriminante b²-4ac.
Tip: Para calcular la raíz cuadrada deberás utilizar la función sqrt()*/

$a = 1; 
$b = 3;
$c = 2;

$x1 = (-$b + sqrt( $b * $b - 4 * $a * $c ))/ 2*$a;
$x2 = (-$b - sqrt( $b * $b - 4 * $a * $c ))/ 2*$a; 

echo "Los resultados son $x1 y $x2"

?>