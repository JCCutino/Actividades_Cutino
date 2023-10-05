"use strict";

/*
Escribe una función que tome un array de números y devuelva un nuevo array
que solo contenga los números pares. Utiliza una función flecha para realizar
esta operación. */

let obtenerNumerosPares = (numeros) => {
    return numeros.filter(numero => numero % 2 === 0);
};

// Ejemplo de uso:
const arrayOriginal = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
const arrayPares = obtenerNumerosPares(arrayOriginal);

document.write(arrayPares);