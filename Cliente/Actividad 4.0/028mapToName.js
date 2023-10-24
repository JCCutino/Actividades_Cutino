"use strict";
/*028mapToName.js/.html: Tienes un array de objetos bands, cada uno tiene band.name. Escribe el código que lo convierta en un array de nombres. Por ejemplo:

let acdc= { name: "ACDC", age: 25 };
let metallica = { name: "Metallica", age: 30 };
let guns= { name: "Guns and Roses", age: 28 };
let bands = [ acdc, metallica, guns];
let names = /* ... tu código 
alert( names );
*/

let acdc= { name: "ACDC", age: 25 };
let metallica = { name: "Metallica", age: 30 };
let guns= { name: "Guns and Roses", age: 28 };
let bands = [ acdc, metallica, guns];

//Con el metodo map vamos  iterando en los objetos y almacenamos el valor name en el array names
let names = bands.map(band => band.name);

let namesString = names.join(', ');//Lo convertimos a un string usando el metodo join diviendolos con comas

alert(namesString);