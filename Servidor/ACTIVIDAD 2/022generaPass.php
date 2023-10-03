<?php
/*Crea una función que, a partir de un tamaño, genere una contraseña aleatoria compuesta de letras y dígitos de manera aleatoria. */
function generaContraseña($longitud) { 
  //Creamos un string con todos los caracteres
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

   //Creamos una variable con la longitud de la cadena
    $longitudCaracteres = strlen($caracteres);

    $contraseña = ''; //Creamos una variable con la contraseña a generar

   
    for ($i = 0; $i < $longitud; $i++) {//Creamos un bucle for que se recorra hasta la longitud
        $valorAleatorio = rand(0, $longitudCaracteres - 1); //Generamos un valor aleatorio
        $contraseña .= $caracteres[$valorAleatorio]; //Lo concatenamos con la contraseña
    }

    return $contraseña; //Devolvemos la contraseña
}



$contraseñaGenerada = generaContraseña(10); //LLamamos a la función con la longitud de la contraseña

echo "Contraseña generada: $contraseñaGenerada"; //La mostramos


?>