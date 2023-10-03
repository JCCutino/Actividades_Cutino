<?php
/*20. EsCrIbE uNa FuNcIóN qUe TrAnSfOrMe UnA cAdEnA eN cAnI. */

function convierteACani($cadena) { //Creamos una funcion que recoge una cadena
    $resultado = '';

    for ($i = 0; $i < strlen($cadena); $i++) {
        
        if ($i % 2 == 0) { //Vamos intercalando mayusculas con minisculas
            $resultado .= strtoupper($cadena[$i]);
        } else {
            $resultado .= strtolower($cadena[$i]);
        }
    }

    return $resultado; //Devolvemos el resultado
}


$cadenaOriginal = "Hola Mundo";
$cadenaCani = convierteACani($cadenaOriginal);

//Mostramos la cadena original y la cadena transformada
echo "Original: $cadenaOriginal<br>";
echo "En estilo Cani: $cadenaCani";
?>