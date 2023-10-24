"use strict";
/*018createRandomInteger.js/.html: Crea una función randomInteger(min, max) que genere un número entero aleatorio entre min y max incluyendo ambos, min y max, como valores posibles. Todo número del intervalo min..max debe aparecer con la misma probabilidad. Ejemplos de funcionamiento:
alert( randomInteger(1, 5) ); // 1
alert( randomInteger(1, 5) ); // 3
alert( randomInteger(1, 5) ); // 5
 */

function randomInteger(min, max) {
    // Gerenamos un valor aleatorio entre 0 y 1(no inclusive)
   let valorRandom = Math.random();
  
   //Para generar el resultado sumamos el minimo al producto del valor aleatorio por el maximo menos el minimo
   let resultado = Math.floor(min + (valorRandom * (max - min)));
  
    return resultado;
  }

alert(randomInteger(1, 5) ); 
alert(randomInteger(1, 5) ); 
alert(randomInteger(1, 5) ); 