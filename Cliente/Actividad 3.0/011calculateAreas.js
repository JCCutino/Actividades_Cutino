"use strict";

/*Crea una función que pueda calcular el área de diferentes figuras geométricas,
como triángulos, círculos y rectángulos. La función debe tomar el tipo de figura
y los parámetros necesarios para calcular el área. Si no se proporcionan los
parámetros necesarios, la función debería devolver un mensaje indicando que no
se pueden calcular el área. Pista: necesitarás usar parámetros opcionales,
quizás el uso del operador "..." te sea útil.*/

function calcularArea(figura, ...parametros) {
    switch (figura.toLowerCase()) {
        case 'triangulo':
            if (parametros.length === 2) {
                const [base, altura] = parametros;
                return (base * altura)/2;
            } else {
                return "Para un triángulo, se necesitan la base y la altura como parámetros.";
            }
        case 'circulo':
            if (parametros.length === 1) {
                const [radio] = parametros;
                return Math.PI * Math.pow(radio, 2);
            } else {
                return "Para un círculo, se necesita el radio como parámetro.";
            }
        case 'rectangulo':
            if (parametros.length === 2) {
                const [lado1, lado2] = parametros;
                return lado1 * lado2;
            } else {
                return "Para un rectángulo, se necesitan dos lados como parámetros.";
            }
        default:
            return "Introduce una figura válida. Las opciones son: triángulo, círculo, rectángulo.";
    }
}


alert(calcularArea('triangulo', 5, 8));        // El area es 20
alert(calcularArea('circulo', 3));             // El area es 28.27
alert(calcularArea('rectangulo', 4, 6));       // El area es 24
alert(calcularArea('cuadrado', 4));            // ERROR DE FIGURA Introduce una figura válida. Las opciones son: triángulo, círculo, rectángulo.
alert(calcularArea('triangulo', 5));           // ERROR DE PARAMETROS Para un triángulo, se necesitan la base y la altura como parámetros.