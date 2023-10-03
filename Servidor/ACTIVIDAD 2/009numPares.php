<?php
/*Escribe un programa que muestre los números pares del 0 al 50 (dentro de una lista desordenada). */
echo "<ul>";//Abrimos la etiqueta ul

for ($i = 0; $i <= 50; $i += 2) {//En un bucle for que aumenta de 2 en 2 vamos mostrando todos los valores
    echo "<li>$i</li>";//Por cada repeticion en el bucle creamos un li con el valor de i
}

echo "<ul/>";//Cerramos la etiquete ul
?>