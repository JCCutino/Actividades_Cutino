"use strict";
/*026fibonnacci.js/.html: Crear un array que contenga los 20 primeros números de Fibonacci. */

function generarFibonacci(n) {
    let fibonacci = [0, 1]; // Inicializamos el array con los primeros dos números de Fibonacci.
  
    for (let i = 2; i < n; i++) {
      // Generamos los números de Fibonacci sumando los dos anteriores.
      let siguienteNumero = fibonacci[i - 1] + fibonacci[i - 2];
      fibonacci.push(siguienteNumero); //Lo introducimos en el array
    }
  
    return fibonacci;
  }

console.log(generarFibonacci(20));