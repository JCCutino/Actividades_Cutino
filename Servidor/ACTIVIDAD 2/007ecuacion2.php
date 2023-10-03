<?php
/*Crea un programa que resuelva una ecuación de 2º grado del tipo ax² + bx + c = 0. 
Ten en cuenta que puede tener 2, 1 o no tener solución dependiendo del valor del discriminante b²-4ac.
Tip: Para calcular la raíz cuadrada deberás utilizar la función sqrt()*/

//Creamos las variables a, b y c
$a = 1; 
$b = 2;
$c = 3;
//Comprobamos el valor discriminante
if(($b * $b - 4 * $a * $c)<0){
    echo "No hay resultado";
    // Si es menor que 0 no hay resultado
}elseif(($b * $b - 4 * $a * $c)==0){
    //Si es igual a 0 solo hay un resultado
    $x1 = (-$b + sqrt( $b * $b - 4 * $a * $c ))/ 2*$a;
    echo "El resultado es $x1";

}else{
    //Creamos los 2 tipos de resultados siguiendo usando la formula de las ecuaciones de segundo grado
    
    $x1 = (-$b + sqrt( $b * $b - 4 * $a * $c ))/ 2*$a;
    $x2 = (-$b - sqrt( $b * $b - 4 * $a * $c ))/ 2*$a; 

//Mostramos los resultados
echo "Los resultados son $x1 y $x2";
}


?>