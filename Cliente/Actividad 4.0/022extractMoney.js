"use strict";
/*022extractMoney.js/.html: Tenemos un coste en forma de “$120”. Es decir: el signo de dólar va primero y luego el número. Crea una función extractCurrencyValue(str) que extraiga el valor numérico de dicho string y lo devuelva. Por ejemplo:
alert( extractCurrencyValue('$120') === 120 ); // true
 */

function extractCurrencyValue(str) {
    // Usamos el slice para eliminar el primer valor ($) y luego usamos un parseInt para transformarlo en un número entero
    return parseInt(str.slice(1));
}

alert(extractCurrencyValue('$120')); 