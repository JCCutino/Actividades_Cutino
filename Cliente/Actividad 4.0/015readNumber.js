"use strict";
/*015readNumber.js/.html: Crea una función readNumber que pida un número hasta que el visitante ingrese un valor numérico válido.
El valor resultante debe ser devuelto como number. El visitante puede también detener el proceso ingresando una línea vacía o presionando “CANCEL”.
 En tal caso la función debe devolver null. */

 function readNumber() {
    while (true) { //Creamos un bucle
      let entrada = prompt("Introduce un número:"); //Le pedimos al usuario un numero
  
      
      if (entrada === "" || entrada === null) {
        return null; //Comprobamos si la cadena está vacia y es null (El usuario ha pulsado cancelar) para salir del bucle devolviendo null
      }
  
      
      let numero = Number(entrada); //Lo convertimos a un valor numerico
  
    
      if (!isNaN(numero) && isFinite(numero)) { //Si es un numero valido salimos del bucle devolviendo el numero
        return numero;
      }
  
      alert("Por favor, introduce un número válido."); //Si no pedimos de nuevo el numero
    }
  }
  
  let numeroIntroducido = readNumber(); //Llamamos a la funcion 
  
  if (numeroIntroducido !== null) { //Si la funcion no ha devuelto null mostramos el número
   alert("Número ingresado: " + numeroIntroducido); 
  } else {
    alert("El usuario canceló la operación o ingresó una línea vacía."); //Si la funcion devuelve null mostramos un mensaje para indicarlo
  }