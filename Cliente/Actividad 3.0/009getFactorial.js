"use strict";

/*Escribe una función que tome un número entero positivo como argumento y devuelva su factorial.
 El factorial de un número es el producto de todos los enteros positivos desde 1 hasta ese número.
*/

function calcularFactorial(numero) {
    if (numero < 0) {
        return "Pon un numero positivo";
    } else if (numero === 0 || numero === 1) {
        return 1;
    } else {
        let factorial = 1;
        for (let i = 2; i <= numero; i++) {
            factorial *= i;
        }
        return factorial;
    }
}
alert(calcularFactorial(6));