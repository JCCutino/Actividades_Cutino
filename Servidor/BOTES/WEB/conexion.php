<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bbdd_barcos";



// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    echo("Conexión fallida: " . $conn->connect_error);
}

echo("Conexión exitosa");
echo("<br>");





?>