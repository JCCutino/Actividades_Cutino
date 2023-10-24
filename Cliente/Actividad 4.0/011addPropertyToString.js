"use strict";
/*011addPropertyToString.js/.html: ¿Puedo agregar una propiedad a un string?: Considera el siguiente código:
let str = "Peter";
str.test = 5;
alert(str.test);
Qué piensas: ¿funcionará? ¿Qué mostrará? ¿Por qué?
 */

let str = "Peter";
str.test = 5;
alert(str.test);

//La variable str es una variable de tipo primitivo(String), con lo cual no podemos asignarle una propiedad