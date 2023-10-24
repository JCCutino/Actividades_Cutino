"use strict";
/*032showWeekDate.js/.html: Muestra en pantalla un día de la semana Escribe una función getWeekDay(date) para mostrar el día de la semana en formato corto: ‘MO’, ‘TU’, ‘WE’, ‘TH’, ‘FR’, ‘SA’, ‘SU’.
Por ejemplo:
let date = new Date(2012, 0, 3);  // 3 Jan 2012
alert( getWeekDay(date) );        // debería mostrar "TU"
 */

function getWeekDay(date) {
    const diaSemana = ['SU', 'MO', 'TU', 'WE', 'TH', 'FR', 'SA']; //Creamos un array con los dias de la semana 
    return diaSemana[date.getDay()]; //Obtenemos el dia con el indice obtenido en la funcion getDay()
  }
  
  let date = new Date(2012, 0, 3);  
  alert(getWeekDay(date)); 