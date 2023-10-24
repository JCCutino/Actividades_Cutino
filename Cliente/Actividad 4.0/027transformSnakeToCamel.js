"use strict";
/*027transformSnakeToCamel.js/.html: Escribe la función camelize(str) que convierta palabras separadas por _como “mi_cadena_corta” en palabras con mayúscula “miCadenaCorta”. Esto sería: quitar todos los _ y que cada palabra después de _ comience con mayúscula. Ejemplos:
camelize("background_color") == 'backgroundColor';
camelize("list_style_image") == 'listStyleImage';
camelize("_webkit_transition") == 'WebkitTransition';
P.D. Pista: usa split para dividir el string en un array, transfórmalo y vuelve a unirlo (join).
 */

function camelize(str) {
    let words = str.split('_');//Separamos el string en cada _
    for (let i = 1; i < words.length; i++) { //Con un bucle for lo recorremos
      words[i] = words[i][0].toUpperCase() + words[i].slice(1).toLowerCase(); //Pasamos la primera letra a mayusculas, el resto lo pasamos a minusculas 
    }
    return words.join('');//Unimos todo
  }

alert(camelize("background_color"));
alert(camelize("list_style_image"));
alert(camelize("_webkit_transition"));