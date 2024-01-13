/*Escribe una función createCalendar(elem, year, month).
Su llamado debe crear un calendario para el año y mes dados y ponerlo dentro de elem. 
El calendario debe ser una tabla, donde una semana es <tr>, y un día es<td>. 
Los encabezados de la tabla deben ser <th> con los nombres de los días de la semana: 
el primer día debe ser “lunes” y así hasta “domingo”. 

P.S. Para esta tarea es suficiente generar el calendario, no necesita aún ser pulsable. 
Por ejemplo, createCalendar(cal, 2012, 9) 

*/
function crearCalendario(elem, año, mes) {
    let diasSemana = ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'];
  
    let tabla = document.createElement('table');
    let filaEncabezado = document.createElement('tr');

    diasSemana.forEach(dia => {
      let th = document.createElement('th');
      th.textContent = dia;
      filaEncabezado.appendChild(th);
    });

    tabla.appendChild(filaEncabezado);
  
    let primerDia = new Date(año, mes - 1, 1);
  
    let primerDiaSemana = primerDia.getDay() === 0 ? 7 : primerDia.getDay();
  
    let fechaActual = new Date(primerDia);
    let filaActual = document.createElement('tr');
  
    for (let i = 1; i < primerDiaSemana; i++) {
      let td = document.createElement('td');
      filaActual.appendChild(td);
    }
  
    while (fechaActual.getMonth() === mes - 1) {
      let td = document.createElement('td');
      td.textContent = fechaActual.getDate();
      filaActual.appendChild(td);
  
      fechaActual.setDate(fechaActual.getDate() + 1);
  
      if (fechaActual.getDay() === 1) {
        tabla.appendChild(filaActual);
        filaActual = document.createElement('tr');
      }
    }
  
    if (fechaActual.getDay() !== 1) {
        while (filaActual.children.length < 7) {
          let td = document.createElement('td');
          filaActual.appendChild(td);
        }
      }
    tabla.appendChild(filaActual);
  
    elem.appendChild(tabla);
  }
  
  
  let cal = document.getElementById("calendario");
  crearCalendario(cal, 2012, 9);
  