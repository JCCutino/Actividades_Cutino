"use strict";
/*004multiplyNumericProperties.html/.js: Crea una función multiplyNumeric(obj) que multiplique todas las propiedades numéricas de obj por 2. Por ejemplo:
// Antes de la llamada
let menu = {
  width: 200,
  height: 300,
  title: "Mi menú"
};

multiplyNumeric(menu);

// Después de la llamada
menu = {
  width: 400,
  height: 600,
  title: "Mi menú"
};
Nota que multiplyNumeric no necesita devolver nada. Debe modificar el objeto en su lugar.
P.D. Usa typeof para verificar si hay un número aquí.
 */

let menu = { //Creamos un objeto 
    width: 200,
    height: 300,
    title: "Mi menú"
  };

  function multiplyNumeric(obj) { //Creamos una funcion que multiplica los valores numéricos
    
    for (const key in obj) { //Recorremos el objeto
    
        if (typeof obj[key] === 'number') {
            obj[key] = obj[key]*2; //Si es de tipo numérico lo multiplicamos por 2
        }
          
        }
    }

multiplyNumeric(menu) //Llamamos a la función

    for (const key in menu) {
      
    alert(menu[key]); //Mostramos el objeto
        
    }
  