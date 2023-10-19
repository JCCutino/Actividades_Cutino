"use strict";
/*003sumProperties.js/.html: Tenemos un objeto que almacena los salarios de nuestro equipo:
let salaries = {
  Harry: 100,
  Ron 160,
  Hermione: 130
}
Escribe el código para sumar todos los salarios y almacenar el resultado en la variable sum. En el ejemplo de arriba nos debería dar 390. Si salaries está vacío entonces el resultado será 0.
 */

let salaries = {
    Harry: 100,
    Ron: 160,
    Hermione: 130
  }

  function sumarSalarios(obj) {
    let sum = 0;
    for (let key in obj) {
           sum = sum + obj[key];
          }
          return sum;
    }

alert(sumarSalarios(salaries));