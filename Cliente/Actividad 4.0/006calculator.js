"use strict";
/*006calculator.js/.html: Crea un objeto calculator con tres métodos:
read() pide dos valores y los almacena como propiedades de objeto con nombres a y b.
sum() devuelve la suma de los valores almacenados.
mul() multiplica los valores almacenados y devuelve el resultado.
let calculator = {
  // ... tu código ...
};
calculator.read();
alert( calculator.sum() );
alert( calculator.mul() );
 */

let calculator = { //Creamos un objeto
    a: 0,
    b: 0,
    read: function() { //Creamos un metodo que pide 2 valores al usuario
      this.a = parseFloat(prompt('Introduce el primer valor:'));
      this.b = parseFloat(prompt('Introduce el segundo valor:'));
    },
    sum: function() { //Creamos un metodo que suma los 2 valores
      return this.a + this.b;
    },
    mul: function() { //Creamos un metodo que multiplica los 2 valores
      return this.a * this.b;
    }
  };
  
  calculator.read(); //Llamamos a los metodos
  alert('La suma es: ' + calculator.sum());
  alert('La multiplicación es: ' + calculator.mul());
  