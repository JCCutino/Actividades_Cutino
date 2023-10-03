<?php

//Indicamos el número por el que vamos a multiplicar
$multiplicador = 4;

echo "<table border=1> "; //Empezamos la tabla

echo "<tr><th>$multiplicador</th><th>*</th><th>X</th><th>=</th><th>$multiplicador*b</th></tr>";//Creamos la primera linea de la tabla
for ($i=1; $i <= 10; $i++) { 
    $resultado = $multiplicador * $i; //En un bucle for vamos calculando la tabla de multiplicar y la mostramos
    echo "<tr><th>$multiplicador</th><th>*</th><th>$i</th><th>=</th><th>$resultado</th></tr>";
}


echo "</table>"; //Terminamos la tabla

?>