"use strict";

/*Función min(a, b)

Escriba una función min(a,b) la cual devuelva el menor de dos números a y b.

Por ejemplo:

min(2, 5) == 2

min(3, -1) == -1

min(1, 1) == 1 */

function min(a,b) {
//Usando el operador elvis devolvemos el numero menor
return (a<b) ? a : b;
    
}
//Llamamos a la funcionm
alert(min(3,-1));