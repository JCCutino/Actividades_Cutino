"use strict";
/*020checkSpan.js/.html: Escribe una función checkSpam(str) que devuelva true si str contiene ‘viagra’ o ‘XXX’, de lo contrario false. La función debe ser insensible a mayúsculas y minúsculas:
checkSpam('compra ViAgRA ahora') == true
checkSpam('xxxxx gratis') == true
checkSpam("coneja inocente") == false
 */

function checkSpam(str) {
    //Convertimos el string a minusculas
    let minusStr = str.toLowerCase();
 //Comprobamos si incluye las palabras viagra y xxx
    if(minusStr.includes('viagra') || minusStr.includes('xxx')){
        return true; //Si lo incluye devolvemos true
    }else{
        return false; //Si no lo incluye devolvemos false
    }
}


alert(checkSpam('compra ViAgRA ahora'));
alert(checkSpam('xxxxx gratis'));
alert(checkSpam("coneja inocente"));