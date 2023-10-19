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

let calculator = {
    a: 0,
    b: 0,
    read: function() {
      this.a = parseFloat(prompt('Introduce el primer valor:'));
      this.b = parseFloat(prompt('Introduce el segundo valor:'));
    },
    sum: function() {
      return this.a + this.b;
    },
    mul: function() {
      return this.a * this.b;
    }
  };
  
  calculator.read();
  alert('La suma es: ' + calculator.sum());
  alert('La multiplicación es: ' + calculator.mul());
  