"use strict";
/*Crea una función llamada findMaxValue que tome un array de números y utilice
 el método reduce para devolver el valor más grande. Utilice las funciones flecha y no haga uso de if else.
 */

 let findMaxValue = (array) => {
  // El método reduce toma una función de reducción que compara el valor actual con el máximo y devuelve el máximo de ambos.
    return array.reduce((max, valor) => Math.max(max,valor));
  };
  
 //Creamos un array
  let numeros = [5, 9, 3, 4, 7];
  //Llamamos a la funcion y mostramos el resultado
  let resultado = findMaxValue(numeros);
  alert(resultado); 