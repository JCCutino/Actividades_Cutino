"use strict";

/* Crea una función que tome una cadena de texto y encuentre la subcadena más larga sin caracteres repetidos.*/

function subcadenaMasLarga(cadena) {
    let inicio = 0; 
    let mejorInicio = 0; 
    let longitudMaxima = 0; 
    let caracteresVistos = []; 

    for (let i = 0; i < cadena.length; i++) {
        const caracter = cadena[i];
// Mientras el caracter actual ya haya sido visto, ajustamos el inicio de la subcadena y avanzamos.
        while (caracteresVistos.includes(caracter)) {
            caracteresVistos.shift();// Eliminamos el primer caracter visto.
            inicio++;// Ajustamos el índice de inicio.

        }

        caracteresVistos.push(caracter);// Agregamos el caracter actual a los caracteres vistos.

        const longitudActual = i - inicio + 1; // Calculamos la longitud actual de la subcadena.

        if (longitudActual > longitudMaxima) {//Si la longitud actual es superior a la anterior la actualizamos
            longitudMaxima = longitudActual;
            mejorInicio = inicio;
        }
    }
//Devolvemos la cadena mas larga sin caracteres repetidos
    return cadena.slice(mejorInicio, mejorInicio + longitudMaxima);
}
const cadena = "El aliento de mi gato huele a comida de gato";
//Llamamos a la funcioon
alert(subcadenaMasLarga(cadena));
