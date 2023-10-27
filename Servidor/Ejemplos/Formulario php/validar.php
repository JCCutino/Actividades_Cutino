<?php

include_once("conexion.php");

if (isset($_POST['nombre']) && isset($_POST['cuenta'])) {
    $nombre = $_POST['nombre'];
    $cuenta= $_POST['cuenta'];


$consulta = "INSERT INTO usuario (nombre, numero)
VALUES ('$nombre', '$cuenta');";

$result = $conn->query($consulta);

if ($result) {
    echo "Inserción exitosa";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

$consultaSelect = "SELECT * FROM usuario";

$result = $conn->query($consultaSelect);

if ($result->num_rows > 0) {
    // Imprimir los datos de los usuarios
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Nombre: " . $row["nombre"] . "<br>";
        echo "Numero de cuenta: " . $row["numero"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}


}
?>