<?php
/*8.	008Investiga para qué sirve la instrucción match(), disponible desde PHP8 (https://www.php.net/manual/es/control-structures.match.php).
Explica con un par de l√≠neas su propósito y mediante código demuestra su uso. */

echo "La instrucción match en PHP 8 es una forma más poderosa y expresiva de hacer comparaciones. Funciona como un switch que te permite comparar una variable con varios valoresy ejecutar código según el patrón coincidente.";
 
$valor = 3;
echo "<br>";
$resultado = match ($valor) { //Creamos el match  y dependiendo del valor mostramos una cosa u otra
    1 => "Uno",
    2, 3, 4 => "Dos, Tres o Cuatro",
    5 => "Cinco",
    default => "Otro Valor",
};

echo "Resultado: $resultado";
 
?>