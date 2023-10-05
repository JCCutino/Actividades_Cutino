"use strict";

/*Escribe una función que tome un número entero positivo como argumento y devuelva su factorial.
 El factorial de un número es el producto de todos los enteros positivos desde 1 hasta ese número.
*/

function calcularFactorial(numero) {
     // Verificamos si el número es negativo.
    if (numero < 0) {
        return "Pon un numero positivo";
           //El factorial de 0 y 1 es 1.
    } else if (numero === 0 || numero === 1) {
        return 1;
    } else {
        let factorial = 1;
        // Para números mayores que 1, calculamos el factorial utilizando un bucle for.
        for (let i = 2; i <= numero; i++) {
            factorial *= i;
        }
        return factorial;
    }
}
//Llamamos a la funcion
alert(calcularFactorial(6));