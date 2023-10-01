<?php
/*20. EsCrIbE uNa FuNcIóN qUe TrAnSfOrMe UnA cAdEnA eN cAnI. */

function convierteACani($cadena) {
    $resultado = '';

    for ($i = 0; $i < strlen($cadena); $i++) {
        
        if ($i % 2 == 0) {
            $resultado .= strtoupper($cadena[$i]);
        } else {
            $resultado .= strtolower($cadena[$i]);
        }
    }

    return $resultado;
}


$cadenaOriginal = "Hola Mundo";
$cadenaCani = convierteACani($cadenaOriginal);

echo "Original: $cadenaOriginal<br>";
echo "En estilo Cani: $cadenaCani";
?>