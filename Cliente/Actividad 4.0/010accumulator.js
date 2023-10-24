"use strict";
/*010accumulator.js/.html:  Crear una función constructor Accumulator(startingValue).
El objeto que crea debería:  Almacenar el “valor actual” en la propiedad value. El valor inicial se establece en el argumento del constructor startingValue.
El método read() debe usar prompt para leer un nuevo número y agregarlo a value.
En otras palabras, la propiedad value es la suma de todos los valores ingresados por el usuario con el valor inicial startingValue.

let accumulator = new Accumulator(1); // valor inicial 1
accumulator.read(); // agrega el valor introducido por el usuario
accumulator.read(); // agrega el valor introducido por el usuario
alert(accumulator.value); // muestra la suma de estos valores
*/



function Accumulator(valor) { //Creamos la funcion con un valor inicial
    this.value = valor; //Asiganamos el valor inicial a value

    this.read = function() { //Creamos un metodo para que el usuario introduzca un valor y se sume
        this.a = +(prompt('Introduce un valor:'));
        this.value = this.value + this.a;
    };
}



let accumulador = new Accumulator(1); // valor inicial 1
accumulador.read(); // agrega el valor introducido por el usuario
accumulador.read(); // agrega el valor introducido por el usuario
alert(accumulador.value); // muestra la suma de estos valores