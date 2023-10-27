"use strict";
/*030arrayToObjetct.js/.html: Crea un objeto a partir de un array Supongamos que recibimos un array de personajes con la forma {id:..., nombre:..., pelicula:... }.
Crea una función groupById(arr) que cree un objeto, con id como clave (key) y los elementos del array como valores. Dicha función es realmente útil cuando trabajamos con información del servidor.
Para esta actividad asumimos que cada id es único. No existen dos elementos del array con el mismo id.
Usa el método de array .reduce en la solución.
 */
function groupById(arr) {
let resultado = arr.reduce((acumulador, personaje) =>{ //Almacenamos en un objeto vacio los objetos agrupados
    acumulador[personaje.id]= personaje; //Utilizamos la propiedad id para el acumulador
    return acumulador;
}, {});
return resultado //Devolvemos el objeto
  }

  const personajes = [ //Creamos un array de obejtos de peliculas 
    { id: 1, nombre: "Norman", pelicula: "ParaNorman" },
    { id: 2, nombre: "Doctor Strange", pelicula: "Doctor Strange" },
    { id: 3, nombre: "Harry Potter", pelicula: "Harry Potter" }
  ];
  
let personajesPorId = groupById(personajes);
console.log(personajesPorId);