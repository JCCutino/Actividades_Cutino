<?php
/*A partir de una cantidad de dinero, mostrar su descomposición en billetes (500, 200, 100, 50, 20, 10, 5) y monedas (2, 1), para que el número de elementos sea mínimo. No se utilizar ninguna instrucción condicional. Por ejemplo, al introducir 138 debe mostrar:
1 billete de 100
0 billete de 50
1 billete de 20
1 billete de 10
1 billete de 5
1 moneda de 2
2 monedas de 1
Tip: Puedes forzar a realizar la división entera mediante la función intdiv($dividendo, $divisor) o pasar un número flotante a entero puedes usar la función intval().
*/

//Creamos una función llamada descomponerDinero
function descomponerDinero($cantidad)
{
    //Introducimos en un array todas las cantidades posibles
    $denominaciones = [500, 200, 100, 50, 20, 10, 5, 2, 1];

    //Recorremos todas las denominaciones
    foreach ($denominaciones as $denominacion) {
        
        //Dividimos la cantidad de dinero entre la denominacion correspondiente y nos quedamos solo cn la parte entera
        $cantidadDenominacion = intdiv($cantidad, $denominacion);

   
        //Mostramos la cantidad y con un elvis indicamos si es un billete, una moneda y si es plural o singular
        echo "$cantidadDenominacion " . ($denominacion >= 5 ? 'billete' : 'moneda') . ($cantidadDenominacion > 1 ? 's' : '') . " de $denominacion\n";
        echo "<br>";

      //Actualizamos la cantidad quedandonos con el resto de la división
        $cantidad %= $denominacion;
    }

 }


// LLamamos a la función 
descomponerDinero(138);
?>