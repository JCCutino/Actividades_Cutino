"use strict";
/*017createRandom.js/.html: La función incorporada Math.random() crea un valor aleatorio entre 0 y 1 (no incluyendo 1). Escribe una función random(min, max) para generar un número de punto flotante entre min y max (no incluyendo max). Ejemplos de su funcionamiento:
alert( random(1, 5) ); // 1.2345623452
alert( random(1, 5) ); // 3.7894332423
alert( random(1, 5) ); // 4.3435234525
 */

function random(min, max) {
    // Gerenamos un valor aleatorio entre 0 y 1(no inclusive)
   let valorRandom = Math.random();
  
   //Para generar el resultado sumamos el minimo al producto del valor aleatorio por el maximo menos el minimo
   let resultado = min + (valorRandom * (max - min));
  
    return resultado;
  }

alert(random(1, 5) ); 
alert(random(1, 5) ); 
alert(random(1, 5) ); 