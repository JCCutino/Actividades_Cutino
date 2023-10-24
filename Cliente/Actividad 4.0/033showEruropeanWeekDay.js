"use strict";
/*033showEruropeanWeekDay.js/.html: En los países europeos se cuentan los días de la semana a partir del lunes (número 1), seguido del martes (número 2), hasta el domingo (número 7). Escribe una función getLocalDay(date) que devuelva el día de la semana “europeo” para la variable date. let date = new Date(2012, 0, 3);  // 3 Jan 2012
alert( getLocalDay(date) ); // tuesday, should show 2
Una vez lo obtengas, tradúcelo a español.
 */

function getLocalDay(date) {
    // Obtenemos el número del día de la semana
    let diaSemana = date.getDay();
  
    // Ajustamos el número para que el domingo sea 7 y el lunes sea el primero
    if (diaSemana === 0) {
        diaSemana = 7; 
    }
  
    return diaSemana;
  }

  function traducirDiaSemanaEspanyol(numeroDia) {
  let diasSemana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo']; //Creamos un array con los dias de la semana
  return diasSemana[numeroDia - 1]; //Devolvemos el valor del array
}

let date = new Date(2012, 0, 3);//Creamos un objeto Date
//Llamamos a los metodos
let diaSemanaEuropeo = getLocalDay(date);
alert( diaSemanaEuropeo );
let diaSemanaEspanyol = traducirDiaSemanaEspanyol(diaSemanaEuropeo);

alert(diaSemanaEspanyol);