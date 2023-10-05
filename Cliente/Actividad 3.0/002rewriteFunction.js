"use strict";

/*Reescribe la función utilizando '?' o '||'. 
La siguiente función devuelve true si el parámetro age es mayor que 18. 
De lo contrario, solicita una confirmación y devuelve su resultado. */

function checkAge(age) {

    if (age > 18) {
  
      return true;
  
    } else {
  
      return confirm('¿Tienes permiso de tus padres?');
  
    }
  
  }
  /*Reescríbela para realizar lo mismo, pero sin if, en una sola línea.

Haz dos variantes de checkAge:

Usando un operador de signo de interrogación ?
Usando OR || */

function checkAge2(age) { //Creamos la misma funcion pero usando el operador elvis
  return age>= 18 ? true : confirm("¿Tienes permisos de tus padres?");
  
}

function checkAge3(age) { //Aqui usamos el operador OR

  return age>= 18 || confirm("¿Tienes permisos de tus padres?");
}

checkAge2(16);

checkAge3(16);


