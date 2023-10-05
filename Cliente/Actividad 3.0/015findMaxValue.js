"use strict";
/*Crea una función llamada findMaxValue que tome un array de números y utilice
 el método reduce para devolver el valor más grande. Utilice las funciones flecha y no haga uso de if else.
 */

 let reduceArray = (array) => {
    return array.reduce((max, valor) => Math.max(max,valor));
  };
  
 
  let numeros = [5, 9, 3, 4, 7];
  let resultado = reduceArray(numeros);
  alert(resultado); 