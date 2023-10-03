<?php

/*Es el mismo ejercicio anterior, pero separando la lógica. 
En el html crearemos el formulario para introducir los datos,
 y luego recogemos los datos y generamos la tabla en el segundo archivo.*/ 


 //Recogemos todos los datos
$nombre = $_POST['nombre'];
$primerApellido = $_POST['primer_apellido'];
$segundoApellido = $_POST['segundo_apellido'];
$email = $_POST['email'];
$anoNacimiento = $_POST['ano_nacimiento'];
$movil = $_POST['movil'];


//Los mostramos en tabla
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