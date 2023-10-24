"use strict";
/*035getSecondsToAfterTomorrow():  ¿Cuantos segundos faltan para el día de después de mañana? 
Crea una función getSecondsToAfterTomorrow() que devuelva
la cantidad de segundos que faltan para el día después de mañana. 
Por ejemplo, si ahora son las 23:00, entonces:
getSecondsToAfterTomorrow() == 3600 + todos los segundo de un día
P.D.: La función debe poder funcionar para cualquier día, sin valores fijos en el código”.
*/

  function getSecondsToAfterTomorrow() {
    
    let ahora = new Date();//Obtenemos fecha actual
  
    //Obtenemos la fecha de mañana(actual+1)
    let mañana = new Date(ahora.getFullYear(), ahora.getMonth(), ahora.getDate()+1);

 //Obtenemos la fecha de pasado mañana(mañana+1)
    let pasadoMañana = new Date(mañana.getFullYear(), mañana.getMonth(), mañana.getDate()+1);
  
    let diferencia = pasadoMañana - ahora; //Calculamos la diferencia en milisegundos
    return Math.round(diferencia / 1000); //Redondeamos
  }

  const secondsToAfterTomorrow = getSecondsToAfterTomorrow(); //Llamamos a la funcion 

alert(secondsToAfterTomorrow);