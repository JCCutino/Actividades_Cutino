<?php
/*Genera un array aleatorio de 33 elementos con números comprendidos entre el 0 y 100 y calcula: El mayor, el menor y la media.*/

$listavalores = []; //Creamos un array vacio

for ($i=1; $i <= 33; $i++) { //Recorremos un bucle for y vamos introduciendo numeros aleatorios del 0 al 100
   
    $listavalores[$i] = rand(0,100);
}

    echo "<br>";
    echo "Valor máximo " ;
    echo max($listavalores); //Mostramos el número mayor del array
    echo "<br>";
    echo "Valor mínimo " ;
    echo min($listavalores);//Mostramos el número menor del array
    echo "<br>";
    echo "Media numérica " ;
    echo $average = array_sum($listavalores) / count($listavalores); //Calculamos la media y la mostramos 
    