<?php
//Recogemos las variables
$longitudX= $_POST["longitudX"];
$longitudY=  $_POST["longitudY"];

echo "<table border=1> ";
//Iniciamos la tabla

for ($i=1; $i <= $longitudY; $i++) { 

    echo "<tr>";
    
    for ($j=1; $j <= $longitudX ; $j++) { //La recorremos indicando las coordenadas en cada punto
        
        echo "<th>$j,$i</th>";
        
    }
    
    echo "<tr/>"; //Cerramos la fila
}

echo "</table>"; //Cerramos la tabla

?>