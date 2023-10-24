"use strict";
/* Escribe la función isEmpty(obj) que devuelva el valor true si el objeto no tiene propiedades, en caso contrario false. Debería funcionar así:
let schedule = {};
alert( isEmpty(schedule) ); // true
schedule["8:30"] = "Hora de levantarse";
alert( isEmpty(schedule) ); // false
*/

function isEmpty(obj) { //Creamos la funcion
for (let key in obj) { //Recorremos el objeto
        if (obj.hasOwnProperty(key)) {//Comprobamos si el objeto tiene propiedades
          return false;
        }
      }
      return true;
}

let schedule = {}; //Creamos un objeto vacio

alert( isEmpty(schedule) ); //Usamos la funcion que devuelve true si el objeto está vacio

schedule["8:30"] = "Hora de levantarse"; //Le asignamos una propiedad

alert( isEmpty(schedule) );//Volvemos u usar la funcion