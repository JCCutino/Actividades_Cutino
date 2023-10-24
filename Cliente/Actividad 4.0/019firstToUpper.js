"use strict";
/*019firstToUpper.js/.html: Escribe una función ucFirst(str) que devuelva el string str con el primer carácter en mayúscula, por ejemplo:
ucFirst("john") == "John";
 */

function ucFirst(str) {
      // Convierte el primer carácter a mayúscula y concatena el resto de la cadena
      return str[0].toUpperCase() + str.slice(1);
    }
  
    alert(ucFirst("holaaa"));