"use strict";

/*
Escribe una función que tome un array de números y devuelva un nuevo array
que solo contenga los números pares. Utiliza una función flecha para realizar
esta operación. */

let obtenerNumerosPares = (numeros) => {
    //Utilizamos el metodo filter para quedarnos solamente con los valores que nos interesan
    return numeros.filter(numero => numero % 2 === 0);
};

// Creamos un array original con números del 1 al 10.
const arrayOriginal = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// Llamamos a la función obtenerNumerosPares con el array original como argumento.
const arrayPares = obtenerNumerosPares(arrayOriginal);

alert(arrayPares);