<?php
//El ejercicio es exactamente igual que el anterior pero añadimos un condicional
$longitudX= $_POST["longitudX"];

$longitudY=  $_POST["longitudY"];

echo "<table border=2> ";


for ($i=1; $i <= $longitudY; $i++) { 

    echo "<tr>";
    
    for ($j=1; $j <= $longitudX ; $j++) { 
        
        if ( $j == 1 || $j== $longitudX || $i == 1 || $i == $longitudY ) { //Comprobamos si la coordenada pertenece a uno de los bordes
            echo "<td>$j,$i</td>"; //Si es un borde mostramos las coordenadas
        }else{
        echo "<td> </td>";  //Si no creamos una celda vacia
        }
    }
    
    echo "<tr/>";
}

echo "</table>";

?>