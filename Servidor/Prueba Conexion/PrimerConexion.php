<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "PrimeraConexion";



// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    echo("Conexión fallida: " . $conn->connect_error);
}

echo("Conexión exitosa");
echo("<br>");


echo("<h1>Actividad 1</h1>");
echo("<p>Devuelve todos los datos del alumno más joven.</p>");
// Consulta para obtener los datos del alumno más joven
$consulta1 = "SELECT * FROM persona WHERE tipo = 'alumno' ORDER BY fecha_nacimiento DESC LIMIT 1";
$result = $conn->query($consulta1);

// Verificar si se obtuvieron resultados
if ($result->num_rows > 0) {
    // Imprimir los datos del alumno más joven
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "NIF: " . $row["nif"] . "<br>";
        echo "Nombre: " . $row["nombre"] . "<br>";
        echo "Apellido1: " . $row["apellido1"] . "<br>";
        echo "Apellido2: " . $row["apellido2"] . "<br>";
        echo "Ciudad: " . $row["ciudad"] . "<br>";
        echo "Dirección: " . $row["direccion"] . "<br>";
        echo "Teléfono: " . $row["telefono"] . "<br>";
        echo "Fecha de Nacimiento: " . $row["fecha_nacimiento"] . "<br>";
        echo "Sexo: " . $row["sexo"] . "<br>";
        echo "Tipo: " . $row["tipo"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

echo("<h1>Actividad 2</h1>");
echo("<p>Devuelve un listado con los profesores que no están asociados a un departamento.</p>");



// Cerrar la conexión
$conn->close();
?>