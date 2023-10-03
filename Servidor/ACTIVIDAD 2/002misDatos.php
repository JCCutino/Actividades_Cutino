<?php

/*Escribe un programa que almacene en variables tu nombre, primer apellido, segundo apellido,
 email, año en el que naciste y móvil. Luego muéstralos por pantalla dentro de una tabla.*/

//Creamos todas las variables e introducimos un valor en ellas
$nombre = "Juan";
$primerApellido = "Cutiño";
$segundoApellido = "Cortacero";
$email = "jcutinocortacero@gmail.com";
$anoNacimiento = 2001;
$movil = "653652958";

//Creamos una tabla para mostrar todas las variables
echo "<table border=1> ";
echo "<tr><th>Dato</th><th>Valor</th></tr>";
echo "<tr><td>Nombre</td><td>$nombre</td></tr>";
echo "<tr><td>Primer Apellido</td><td>$primerApellido</td></tr>";
echo "<tr><td>Segundo Apellido</td><td>$segundoApellido </td></tr>";
echo "<tr><td>Email</td><td>$email</td></tr>";
echo "<tr><td>Año Nacimiento</td><td>$anoNacimiento</td></tr>";
echo "<tr><td>Movil</td><td>$movil</td></tr>";
echo "</table>";


?>
