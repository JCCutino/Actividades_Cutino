"use strict";
/*029practiceWithBands.js/.html: Ejecuta sobre el siguiente array las operaciones pedidas:
 var grupos = [
    {nombre: "ACDC", genero: "Rock"},
    {nombre: "Cold Play", genero: "Pop"},
    {nombre: "NCT Dream", genero: "K-Pop"},
    {nombre: "Metallica", genero: "Heavy Metal"}
];
Hola Samu
//filtra los grupos por género obtenido aquellos que son de Heavy Metal.
//Busca en los grupos usando “find” el grupo con Nombre “Cold Play”.
//¿En qué posición del array se encuenta “Cold Play”?
 */

var grupos = [
    {nombre: "ACDC", genero: "Rock"},
    {nombre: "Cold Play", genero: "Pop"},
    {nombre: "NCT Dream", genero: "K-Pop"},
    {nombre: "Metallica", genero: "Heavy Metal"}
];

// Filtra los grupos por género obteniendo aquellos que son de Heavy Metal.
var gruposHeavyMetal = grupos.filter(grupo => grupo.genero === "Heavy Metal");

console.log(gruposHeavyMetal);

//Busca en los grupos usando “find” el grupo con Nombre “Cold Play”.

var grupoColdPlay = grupos.find(grupo => grupo.nombre === "Cold Play");

console.log(grupoColdPlay);


// ¿En qué posición del array se encuentra "Cold Play"?
var posicionColdPlay = grupos.findIndex(grupo => grupo.nombre === "Cold Play");

console.log("Cold Play se encuentra en la posición:", posicionColdPlay);