<?php
/*A partir del anterior, refactorizar para que funcione con inicio y fin. */

//Indicamos el valor mínimo y màximo
$min = 21;

$max = 60;

echo "<ul>"; //Abrimos la etiqueta ul

if($min % 2!= 0){ //Comprobamos si el mínimo es un número par y si no lo es le sumamos 1 para convertirlo 
    $min = $min+1;
}
for ($i = $min; $i <= $max; $i += 2) {//En un bucle for que aumenta de 2 en 2 vamos mostrando todos los valores
    echo "<li>$i</li>";
}

echo "<ul/>"; //Cerramos la etiqueta ul
?> 