<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
 
    echo "Formulario enviado con éxito";
} else {
    
    echo "Método no permitido. Por favor, utiliza el formulario para enviar datos.";
}
?>