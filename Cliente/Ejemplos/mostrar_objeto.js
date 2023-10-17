"use strict";
let coche ={
    matricula : "6354FCB",
    marca : "Renault",
    modelo : "Clio"
}

let usuario = {
    nombre : "Juan",
    apellido : "Cutiño",
    dirección : "Calle Salvia 28",
    edad : 22,
    vehiculo : coche 
}



console.log("Información del usuario y del coche:");

for (let prop in usuario) {
   
    if (prop === "vehiculo") {
        console.log(prop);
        for (let prop2 in usuario[prop]) {
            console.log(prop2+": "+usuario[prop][prop2]);
        }
        }else{
            console.log(prop+": "+usuario[prop]);
    }
}
    

    