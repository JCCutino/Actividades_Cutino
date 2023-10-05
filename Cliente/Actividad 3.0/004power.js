"use strict";

/*Función pow(x,n): Escriba la función pow(x,n) que devuelva x como potencia de n.
 O, en otras palabras, multiplique x por si mismo n veces y devuelva el resultado.
 
 pow(3, 2) = 3 * 3 = 9

pow(3, 3) = 3 * 3 * 3 = 27

pow(1, 100) = 1 * 1 * ...* 1 = 1

Cree una página web que solicite x y n, y luego muestre el resultado de pow(x,n).

Nota: La función solo debe admitir valores naturales de n: enteros desde 1.

*/
let base = +prompt("Dame base");//Pediomos la base

let exponente =  +prompt("Dame exponente");//Pedimos el exponente

 let resultado = pow(base,exponente); 
  //Llamamos a la funcion


function pow(base, exponente) { //Creamos una funcion llamada pow
  let resultado =  Math.pow(base, exponente);
//Usamos la funcion Math.pow para calcular la potencia
    return resultado;
}
alert(resultado); //Mostamos el resultado