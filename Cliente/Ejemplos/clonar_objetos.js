

let usuario = {
    nombre : "Juan",
    apellido : "Cutiño",
    dirección : "Calle Salvia 28",
    edad : 22
 }

let clone1 = {};

clone1 = usuario;

console.log("Clonacion usuario simple usando operador igual");

console.log(usuario==clone1);

console.log("Clonacion usuario simple usando assing");

let clone1_2 = {};

Object.assign(clone1_2, usuario);
console.log(usuario==clone1_2);

let coche ={
    matricula : "6354FCB",
    marca : "Renault",
    modelo : "Clio"
}

let usuario2 = {
    nombre : "Juan",
    apellido : "Cutiño",
    dirección : "Calle Salvia 28",
    edad : 22,
    vehiculo : coche 
}

let clone2 = {};

Object.assign(clone2, usuario2);


console.log("Clonacion usuario con coche usando assign");

console.log(usuario2==clone2);

let clone3 = {};

clone3 = structuredClone(usuario2);

console.log("Clonacion usuario con coche usando structuredClone");

console.log(usuario2==clone3)