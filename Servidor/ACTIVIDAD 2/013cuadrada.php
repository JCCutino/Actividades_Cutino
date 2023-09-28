<?php

$longitudX= $_POST["longitudX"];
$longitudY=  $_POST["longitudY"];

echo "<table border=2> ";


for ($i=1; $i <= $longitudY; $i++) { 

    echo "<tr>";
    
    for ($j=1; $j <= $longitudX ; $j++) { 
        
        if ( $j == 1 || $j== $longitudX || $i == 1 || $i == $longitudY ) {
            echo "<td>$j,$i</td>";
        }else{
        echo "<td> </td>";
        }
    }
    
    echo "<tr/>";
}

echo "</table>";

?>