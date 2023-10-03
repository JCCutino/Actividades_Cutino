<?php
/*Rellena un array de 100 elementos de manera aleatoria con valores M o F
(por ejemplo ["M", "M", "F", "M", ...]). Una vez completado, vuelve a
recorrerlo y calcula cuantos elementos hay de cada uno de los valores
almacenando el resultado en un array asociativo ['M' => 44, 'F' => 66]
(no utilices variables para contar las M o las F). Finalmente, muestra
el resultado por pantalla. */

$listavalores = [];
$listaMoF = [1 => "M", 2 => "F"]; //Creamos un array asociativo con M o F


for ($i = 1; $i <= 100; $i++) {
    $valorMoF = $listaMoF[rand(1, 2)]; //En un bucle for de 1 a 100 vamos generando un valor aleatorio para introducir el 1 o 2 (M o F)
    $listavalores[$i] = $valorMoF;
    echo "$i ";
    echo $listavalores[$i];
    echo "<br>";
}

$resultado = array_count_values($listavalores); //Usamos la funcion array_count_values para contar los valores

echo "<br>";
print_r($resultado); //Mostramos los resultados

?>