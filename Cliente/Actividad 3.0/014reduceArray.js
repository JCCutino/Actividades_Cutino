"use strict";
/*Crea una función llamada reduceArray que tome un array de números y utilice
 el método reduce para devolver la suma de todos los elementos. Utilice las funciones flecha.
*/

let reduceArray = (array) => {
    return array.reduce((suma, valor) => suma + valor, 0);
  };
  
 
  let numeros = [5, 2, 3, 4, 5];
  let resultado = reduceArray(numeros);
  alert(resultado); 