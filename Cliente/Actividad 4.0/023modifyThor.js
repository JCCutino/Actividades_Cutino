"use strict";
/*023modifyThor.js/.html: Contesta los siguientes comentarios con respecto a la cadena que contiene la variable thor: 

let thor = "Thor es el hijo de Odín";
// Largo de la cadena
//Encontrar la letra o
//Encontrar el carácter que ocupa la posición 3
//¿Qué carácter ocupa la posición 1?
//Trocea la cadena usando los espacios en blanco
//Reemplaza Thor por Loki
//Recorta la cadena para que devuelva la palabra Odín
//¿Puedes encontrar la letra a? Demuéstralo
//Pon la mitad de la cadena en minúsculas (Sin usar las posiciones de 0 a 11)
 */

let thor = "Thor es el hijo de Odín";
// Largo de la cadena
alert(thor.length);
// Encontrar la letra "o"
alert(thor.indexOf("o"));
// Encontrar el carácter que ocupa la posición 3
alert(thor[3]);
// ¿Qué carácter ocupa la posición 1?
alert(thor[1]);
// Trocea la cadena usando los espacios en blanco
alert(thor.split(" ").join("\n")); 
// Reemplaza "Thor" por "Loki"
let loki = thor.replace("Thor", "Loki");
alert(loki);
// Recorta la cadena para que devuelva la palabra "Odín"
alert(thor.slice(thor.indexOf("Odín"), thor.indexOf("Odín") + 4));

// ¿Puedes encontrar la letra "a"? Demuéstralo
alert(thor.includes("a"));
//Pon la mitad de la cadena en minúsculas (Sin usar las posiciones de 0 a 11)

let primeraMitad = thor.slice(0, thor.length / 2);
let segundaMitad = thor.slice(thor.length / 2);
segundaMitad = segundaMitad.toLowerCase();
thor = primeraMitad + segundaMitad;
alert(thor)