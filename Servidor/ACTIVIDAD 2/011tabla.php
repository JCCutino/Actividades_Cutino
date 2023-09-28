<?php

$multiplicador = 4;

echo "<table border=1> ";

echo "<tr><th>$multiplicador</th><th>*</th><th>X</th><th>Dato</th><th>Dato</th></tr>";
for ($i=1; $i <= 10; $i++) { 
    $resultado = $multiplicador * $i;
    echo "<tr><th>$multiplicador</th><th>*</th><th>$i</th><th>=</th><th>$resultado</th></tr>";
}


echo "</table>";

?>