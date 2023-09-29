<?php
/*Genera un array aleatorio de 33 elementos con números comprendidos entre el 0 y 100 y calcula: El mayor, el menor y la media.*/

$listavalores = [];

for ($i=1; $i <= 33; $i++) { 
   
    $listavalores[$i] = rand(0,100);
}

for ($i=1; $i <= 33; $i++) { 
   
   echo $listavalores[$i]; 
   echo "<br>";
}
    echo "<br>";
    echo "Valor máximo " ;
    echo max($listavalores);
    echo "<br>";
    echo "Valor mínimo " ;
    echo min($listavalores);
    echo "<br>";
    echo "Media numérica " ;
    echo $average = array_sum($listavalores) / count($listavalores);
    