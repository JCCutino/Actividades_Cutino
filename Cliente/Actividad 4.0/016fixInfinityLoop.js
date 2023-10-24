"use strict";
/*016fixInfinityLoop.js/.html: Este bucle es infinito. Nunca termina, ¿por qué?
let i = 0;
while (i != 10) {
  i += 0.2;
}
 */

//Esto es debido a los numeros en punto flotante, estos no se representan con presecion en js, por lo cual el valor nunca será 10,
//si no que se acercará muchisimo (9,999999999), esto resulta en un bucle infinito