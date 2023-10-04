"use strict";

/*Crear una función que reciba una cadena y la devuelva transformada en Cani.
 Por ejemplo, si le pasamos a la función la cadena "una cadena cani es como ésta" 
 obtendremos "UnA KaDeNa kAnI Es kOmO EsTaHHH". Para ello, hay que alternar el uso
  de MAYÚSCULAS y minúsculas, sustituir la letra C por la K y añadir tres letras H al final.*/

  function transformarACani(cadena) {
    let resultado = "";
    let mayusculas = true; 

    for (let i = 0; i < cadena.length; i++) {
        const letra = cadena[i];

        if (letra.toLowerCase() === 'c') {
            resultado += 'K';
        } else {
            resultado += mayusculas ? letra.toUpperCase() : letra.toLowerCase();
        }

        mayusculas = !mayusculas;
    }


    resultado += 'HHH';

    return resultado;
}

let cadenaOriginal = "la cadena le brillo en lo oscuro";
let cadenaTransformada = transformarACani(cadenaOriginal);
alert(cadenaTransformada);
cadenaOriginal = "Huele a Baccarat, fumándose un puro";
cadenaTransformada = transformarACani(cadenaOriginal);
alert(cadenaTransformada);
cadenaOriginal = "Tiene cara que en la cama te da duro";
cadenaTransformada = transformarACani(cadenaOriginal);
alert(cadenaTransformada);