"use strict";
/*014fixNumbers.js/.html: ¿Por qué 6.35.toFixed(1) == 6.3? Según la documentación Math.round y toFixed redondean al número más cercano: 0..4 hacia abajo mientras 5..9 hacia arriba. Por ejemplo:  alert( 1.35.toFixed(1) ); // 1.4
En el ejemplo similar que sigue, ¿por qué 6.35 es redondeado a 6.3, y no a 6.4?
alert( 6.35.toFixed(1) ); // 6.3
¿Cómo redondear 6.35 de manera correcta?
 */


alert( 6.35.toFixed(1) );

//Esto se deba a la forma en la que redondea JS, al ser el segundo valor redondea para abajo

//Para hacerlo podemos multiplicar al numero por 10, redondearlo con la funcion Math.round y luego dividirlo entre 10

var num = 6.35;
var numRedondeado = Math.round(num * 10) / 10;
alert(numRedondeado); // Esto mostrará 6.4