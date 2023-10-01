<?php
/*Crea una función que, a partir de un tamaño, genere una contraseña aleatoria compuesta de letras y dígitos de manera aleatoria. */
function generaContraseña($longitud) {
 
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

   
    $longitudCaracteres = strlen($caracteres);

    $contraseña = '';

   
    for ($i = 0; $i < $longitud; $i++) {
        $valorAleatorio = rand(0, $longitudCaracteres - 1);
        $contraseña .= $caracteres[$valorAleatorio];
    }

    return $contraseña;
}



$contraseñaGenerada = generaContraseña(10);

echo "Contraseña generada: $contraseñaGenerada";


?>