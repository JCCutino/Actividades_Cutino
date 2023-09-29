<?php
/*Rellena un array de 100 elementos de manera aleatoria con valores M o F
(por ejemplo ["M", "M", "F", "M", ...]). Una vez completado, vuelve a
recorrerlo y calcula cuantos elementos hay de cada uno de los valores
almacenando el resultado en un array asociativo ['M' => 44, 'F' => 66]
(no utilices variables para contar las M o las F). Finalmente, muestra
el resultado por pantalla. */

$listavalores = [];

$listaMoF = [ 1 => "M", 2 => "F"];
$listaMoFInverssa =["M" => 0, "F" => 0];
for ($i=1; $i <= 100; $i++) { 
    $valorMoF = $listaMoF[rand(1,2)];
    $listavalores = [ $i => $valorMoF ];
    echo "$i ";
    echo $listavalores[$i];
    echo "<br>";
}

print_r(array_count_values( $listavalores))

?>