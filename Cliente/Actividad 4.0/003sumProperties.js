"use strict";
/*003sumProperties.js/.html: Tenemos un objeto que almacena los salarios de nuestro equipo:
let salaries = {
  Harry: 100,
  Ron 160,
  Hermione: 130
}
Escribe el código para sumar todos los salarios y almacenar el resultado en la variable sum. En el ejemplo de arriba nos debería dar 390. Si salaries está vacío entonces el resultado será 0.
 */

let salaries = { //Creamos un objeto que almacena salarios
    Harry: 100,
    Ron: 160,
    Hermione: 130
  }

  function sumarSalarios(obj) { //Creamos una función que devuelve la suma de los salarios
    let sum = 0;
    for (let key in obj) { //Recorremos el objeto y vamos sumando los salarios
           sum = sum + obj[key];
          }
          return sum;
    }

alert(sumarSalarios(salaries)); //Llamamos a la función