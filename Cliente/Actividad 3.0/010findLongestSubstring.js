"use strict";

/* Crea una función que tome una cadena de texto y encuentre la subcadena más larga sin caracteres repetidos.*/

function subcadenaMasLarga(cadena) {
    let inicio = 0; 
    let mejorInicio = 0; 
    let longitudMaxima = 0; 
    let caracteresVistos = []; 

    for (let i = 0; i < cadena.length; i++) {
        const caracter = cadena[i];

        while (caracteresVistos.includes(caracter)) {
            caracteresVistos.shift();
            inicio++;
        }

        caracteresVistos.push(caracter);

        const longitudActual = i - inicio + 1;

        if (longitudActual > longitudMaxima) {
            longitudMaxima = longitudActual;
            mejorInicio = inicio;
        }
    }

    return cadena.slice(mejorInicio, mejorInicio + longitudMaxima);
}
const cadena = "El aliento de mi gato huele a comida de gato";
alert(subcadenaMasLarga(cadena));
