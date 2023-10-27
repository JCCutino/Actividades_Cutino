"use strict";
/*036formatToRelative.js/.html: Cambia el formato a fecha relativa. Escribe una función formatDate(date) que muestre la fecha en el siguiente formato:
Si a partir de la fecha date pasó menos de 1 segundo, debe devolver "ahora mismo".
De no ser así, si a partir de la fecha date pasó menos de 1 minuto, debe retornar "hace n seg,".
De no ser así, si pasó menos de una hora, debe devolver "hace n min.".
De no ser así, debe retornar la fecha completa en el formato "DD.MM.AA HH:mm". Es decir: "día.mes.año horas:minutos", cada uno de ellos en formato de 2 dígitos, por ej. 31.12.16 10:00.
 */


function formatDate(date) {
    
    let diferencia
    let ahora = new Date();//Obtenemos fecha actual

    let segundos = ahora - date; //Calculamos la diferencia en milisegundos
   segundos =  Math.round(segundos / 1000); //Redondeamos

   if (segundos === 0) { //Si los segundos son iguales a 0 mostramos ahora mismo
    diferencia = "ahora mismo";
    return diferencia;
   }else if(segundos<60 && segundos>1) { //Si el tiempo es entre 1 y 60 segundos mostramos hace cuanto fue
    diferencia = "Hace "+segundos+" seg,";
    return diferencia;
   }else if (segundos>60 && segundos<3600) { //Si el tiempo es entre 1 minuto y 60 minutos mostramos hace cuanto fue 
   let minutos = Math.round(segundos/60);
    diferencia = "Hace " + minutos+ "min.";
    return diferencia;
   }else{//Convertimos todos los datos a String
    let dia = String(date.getDate());
    let mes = String(date.getMonth() + 1); // Sumamos 1 porque los meses van de 0 a 11
    let año = String(date.getFullYear()).slice(2); // Tomamos los últimos dos dígitos del año
    let horas = String(date.getHours()); 
    let minutos = String(date.getMinutes());
    diferencia = dia + '.' + mes + '.' + año + ' ' + horas + ':' + minutos; //Concatenamos los datos
    return diferencia;
}
   }

//Cogemos la fecha actual
let fecha = new Date();

alert(formatDate(fecha));

//Cogemos los segundos de la fecha
let segundos = fecha.getTime();
let segundosResta = 6000;
//Restamos 6 segundos
let fecha2 = new Date(segundos-segundosResta);

alert(formatDate(fecha2));

segundosResta= segundosResta * 60;
//Restamos  6 minutos( 6000ms * 60)
let fecha3 = new Date(segundos-segundosResta);

alert(formatDate(fecha3));
//Creamos una nueva fecha
let fecha4 = new Date("2023-10-25T12:05:04");

alert(formatDate(fecha4));