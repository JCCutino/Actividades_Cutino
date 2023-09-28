<?php
/*A partir del anterior, refactorizar para que funcione con inicio y fin. */

$min = 21;

$max = 60;

echo "<ul>";

if($min % 2!= 0){
    $min = $min-1;
}
for ($i = $min; $i <= $max; $i += 2) {
    echo "<li>$i</li>";
}

echo "<ul/>";
?>