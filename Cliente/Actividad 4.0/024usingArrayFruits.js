"use strict";
/*024usingArrayFruits.js/.html: Ejecuta sobre el siguiente array las operaciones pedidas:
var fruits = ["Banana", "Manzana", "Fresa"];
//Añadimos cereza al principio
//Añadimos melocotón al final
//Mostrar el array elemento a elemento con for clásico
//Eliminamos el primer elemento.
//Eliminamos el último elemento.
//Mostrar cada elemento con for of o for in, lo que considere más adecuado.
 */

var fruits = ["Banana", "Manzana", "Fresa"];

// Añadimos "Cereza" al principio
fruits.unshift("Cereza");

// Añadimos "Melocotón" al final
fruits.push("Melocotón");

// Mostrar el array elemento a elemento con for clásico
for (let i = 0; i < fruits.length; i++) {
  alert(fruits[i]);
}

// Eliminamos el primer elemento
fruits.shift();

// Eliminamos el último elemento
fruits.pop();

// Mostrar cada elemento con for...of
for (const fruta of fruits) {
  alert(fruta);
}