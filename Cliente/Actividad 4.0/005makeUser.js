"use strict";
/*005makeUser.js/.html: Aquí la función makeUser devuelve un objeto. ¿Cuál es el resultado de acceder a su atributo ref? ¿Por qué?

function makeUser() {
  return {
    name: "John",
    ref: this
  };
}
let user = makeUser();
alert( user.ref.name ); // ¿Cuál es el resultado?
*/

function makeUser() {
    return {
      name: "John",
      ref: this
    };
  }
  let user = makeUser();
  alert( user.ref.name );