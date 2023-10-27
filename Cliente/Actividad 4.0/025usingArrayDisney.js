"use strict";
/*025usingArrayDisney.js/.html: Ejecuta sobre el siguiente array las operaciones pedidas:
 let disney = [
    { nombre: "Hércules", pelicula: "Hércules" },
    { nombre: "Megana", pelicula: "Hércules" },
    { nombre: "Hades", pelicula: "Hércules" },
    { nombre: "Campanilla", pelicula: "Peter Pan" },
    { nombre: "Wendy", pelicula: "Peter Pan" }
];

//Meter a Peter Pan al final del array disney.
//Pintar el array
//Meter a El capitán Garfio al principio del array, no olvides la película
//Meter al cocodrilo detrás del capitán, no olvides la película
//Obtener los personajes de la película de "Peter Pan"; y mostrarlos uno a uno.
//Encontrar el índice de Campanilla.
//Buscar al cocodrilo.
//Escribe la función shuffle(array) que baraje (reordene de forma aleatoria) los elementos del array.
 */

let disney = [
    { nombre: "Hércules", pelicula: "Hércules" },
    { nombre: "Megana", pelicula: "Hércules" },
    { nombre: "Hades", pelicula: "Hércules" },
    { nombre: "Campanilla", pelicula: "Peter Pan" },
    { nombre: "Wendy", pelicula: "Peter Pan" }
];

// Meter a "Peter Pan" al final del array disney.
disney.push({ nombre: "Peter Pan", pelicula: "Peter Pan" });

// Pintar el array
console.log(disney);

// Meter a "El capitán Garfio" al principio del array
disney.unshift({ nombre: "El capitán Garfio", pelicula: "Peter Pan" });

// Meter al cocodrilo detrás del capitán
disney.splice(2, 0, { nombre: "Cocodrilo", pelicula: "Peter Pan" });

// Obtener los personajes de la película "Peter Pan" y mostrarlos uno a uno.
for (let personaje of disney) {
    if (personaje.pelicula === "Peter Pan") {
        console.log(personaje.nombre);
    }
}

// Encontrar el índice de "Campanilla".
const indiceCampanilla = disney.findIndex(personaje => personaje.nombre === "Campanilla");
console.log("Índice de Campanilla:", indiceCampanilla);

// Buscar al cocodrilo.
const cocodrilo = disney.find(personaje => personaje.nombre === "Cocodrilo");
console.log("Cocodrilo:", cocodrilo);

//Escribe la función shuffle(array) que baraje (reordene de forma aleatoria) los elementos del array.y.
function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

shuffle(disney);
console.log(disney);