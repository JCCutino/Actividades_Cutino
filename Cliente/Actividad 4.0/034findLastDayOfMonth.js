"use strict";
/*034findLastDayOfMonth.js/.html: Escribe una función getLastDayOfMonth(year, month) que devuelva el último día del mes dado. A veces es 30, 31 o incluso 28/29 para febrero. Parámetros:
year – el año en formato de cuatro dígitos, por ejemplo 2012.
month – el mes, de 0 a 11.
Por ejemplo, getLastDayOfMonth(2012, 1) = 29 (febrero, año bisiesto).
 */

function getLastDayOfMonth(year, month) {
    // Creamos un objeto Date para el primer día del siguiente mes y luego restamos un día
    let siguienteMes = new Date(year, month + 1, 1);
    let diaAnterior = new Date(siguienteMes - 1);
  
    // Obtenemos el día del mes
    return diaAnterior.getDate();
  }
  
  // Ejemplo de uso
  let year = 2012;
  let month = 1; 
  let ultimoDia = getLastDayOfMonth(year, month);
  
  console.log(ultimoDia);