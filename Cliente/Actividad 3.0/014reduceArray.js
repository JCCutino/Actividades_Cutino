"use strict";
/*Crea una función llamada reduceArray que tome un array de números y utilice
 el método reduce para devolver la suma de todos los elementos. Utilice las funciones flecha.
*/

let reduceArray = (array) => {
  // El método reduce toma una función de reducción (en este caso, suma) y un valor inicial (0).
    return array.reduce((suma, valor) => suma + valor, 0);
  };
  
 //Creamos un array 
  let numeros = [5, 2, 3, 4, 5];
  //Reducimos el array llamando a la función
  let resultado = reduceArray(numeros);
  //Mostamos el resultado
  alert(resultado); 