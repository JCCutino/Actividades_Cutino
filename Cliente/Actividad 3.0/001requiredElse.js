"use strict";
/* ¿Es "else" requerido?

La siguiente función devuelve true si el parámetro age es mayor a 18. De lo contrario, solicita una confirmación y devuelve su resultado:*/

function checkAge(age) {

    if (age > 18) {
  
      return true;
  
    } else {

      // ...
  
      return confirm('¿Tus padres te permitieron?');
  
    }
  
  }

  //¿Funcionará la función de manera diferente si se borra else?


  //¿Hay alguna diferencia en el comportamiento de estas dos variantes?
    //Si se borra el else solamente se mandará un true cuando la edad sea mayor que 18, pero no generará la pregunta de confirmación