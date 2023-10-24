"use strict";
/*009otherCalculator.js/.html: Crear una función constructora Calculator que crea objetos con 3 métodos:
read() pide dos valores usando prompt y los guarda en las propiedades del objeto con los nombres a y b.
sum() devuelve la suma de estas propiedades.
mul() devuelve el producto de la multiplicación de estas propiedades.
Por ejemplo:
let calculator = new Calculator();
calculator.read();
alert( "Sum=" + calculator.sum() );
alert( "Mul=" + calculator.mul() );
*/

function Calculadora(){//Creamos una funcion 

        this.read = function() { //Creamos un metodo que pide 2 valores al usuario
          this.a = parseFloat(prompt('Introduce el primer valor:'));
          this.b = parseFloat(prompt('Introduce el segundo valor:'));
        },
        this.sum = function() { //Creamos un metodo que suma los 2 valores
          return this.a + this.b;
        },
        this.mul = function() { //Creamos un metodo que multiplica los 2 valores
          return this.a * this.b;
        
      };

}
let calculator = new Calculadora();
calculator.read();
alert( "Sum=" + calculator.sum() );
alert( "Mul=" + calculator.mul() );