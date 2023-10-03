<?php
/*A partir de una edad muestra por pantalla:
bebé si tiene menos de 3 años
niño si tiene entre 3 y 12 años
adolescente entre 13 y 17 años
adulto entre 18 y 66
jubilado a partir de 67
 */


 //Creamos una variable edad e introducimos un valor
 $edad = 14;

 //Creamos una variable llamada etapa y con un elvis indicamos que es dependiendo de la edad
$etapa = $edad < 3 ? "Eres un bebe" : ($edad >= 3 &&  $edad <= 12 ? "Eres un niño" :($edad >= 13 &&  $edad <= 17 ? "Eres un adolescente" : ($edad >= 18 && $edad <= 66 ? "Eres un adulto" : "Eres jubilado")));  
echo $etapa;
?>