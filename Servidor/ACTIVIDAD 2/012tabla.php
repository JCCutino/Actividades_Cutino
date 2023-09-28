<?php

$longitudX= $_POST["longitudX"];
$longitudY=  $_POST["longitudY"];

echo "<table border=1> ";


for ($i=1; $i <= $longitudY; $i++) { 

    echo "<tr>";
    
    for ($j=1; $j <= $longitudX ; $j++) { 
        
        echo "<th>$j,$i</th>";
        
    }
    
    echo "<tr/>";
}

echo "</table>";

?>