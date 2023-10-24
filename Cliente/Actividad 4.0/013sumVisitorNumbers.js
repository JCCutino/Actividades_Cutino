"use strict";
/*013sumVisitorNumbers.js/.html: Crea un script que pida al visitante que ingrese dos números y muestre su suma.
P.D. Hay una trampa con los tipos de valores. */

let a = +prompt("Introduce un número: "); //Pedimos un valor y lo convertimos a un valor numerico

let b = +prompt("Introduce otro número: "); //Hacemos lo mismo

let resultado = a+b; //Lo sumamos y mostramos el resultado
alert(resultado);