/*Crea una función runOnKeys(func, code1, code2, ... code_n) que ejecute func al presionar simultáneamente las teclas con códigos code1, code2, …, code_n.

Por ejemplo, el siguiente código muestra un alert cuando "Q" y "W" se presionan juntas (en cualquier lenguaje, con o sin mayúscula)

runOnKeys(
  () => alert("¡Hola!"),
  "KeyQ",
  "KeyW"
);
 */
function runOnKeys(func, ...code1) {
    let teclasPresionadas = new Set();

    document.addEventListener('keydown', function(event) {
        teclasPresionadas.add(event.code);

      for (let code of code1) { 
        if (!teclasPresionadas.has(code)) {
          return;
        }
      }
      teclasPresionadas.clear();

      func();
    });

    document.addEventListener('keyup', function(event) {
        teclasPresionadas.delete(event.code);
    });

  }

  runOnKeys(
    () => alert("¡Hola!"),
    "KeyQ",
    "KeyW"
  );