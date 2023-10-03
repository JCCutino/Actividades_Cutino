<?php

/*: Sabiendo la edad de una persona, mostrar la edad que tendrá dentro de 10 años y hace 10 años. 
Además, muestra qué año será en cada uno de los casos. Finalmente, muestra el año de jubilación suponiendo que trabajarás hasta los 67 años. En este caso, no hace falta que previamente crees un formulario,
 puedes probar el ejercicio vía URL: 004edad.php?edad=33. Tip: $anyoActual = date("Y");
 */
//Recogemos la edad de la url
$edad = $_GET["edad"];
 

// Calculamos la edad en 10 años
    $edadEn10Anos = $edad + 10;
    $anoEn10Anos = date("Y") + 10;

    // Calculamos la edad hace 10 años
    $edadHace10Anos = $edad - 10;
    $anoHace10Anos = date("Y") - 10;

    // Calculamos el año de jubilación suponiendo 67 años
    $anoActual = date("Y");
    $edadJubilacion = 67;
    $anoJubilacion = $anoActual + ($edadJubilacion - $edad);

    // Muestramos los resultados
    echo "<p>Edad actual: $edad años</p>";
    echo "<p>En 10 años tendrás $edadEn10Anos años y será el año $anoEn10Anos.</p>";
    echo "<p>Hace 10 años tenías $edadHace10Anos años y era el año $anoHace10Anos.</p>";
    echo "<p>Suponiendo que trabajas hasta los 67 años, te jubilarás en el año $anoJubilacion.</p>";

?>