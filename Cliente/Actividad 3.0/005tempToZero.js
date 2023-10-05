"use strict";

/*Crear una función temporizador que reciba como parámetro los minutos y segundos de duración de éste,
de modo, que cada segundo mostrará por consola el tiempo que le queda al temporizador hasta llegar a 0.
La función recibirá dos parámetros, con los minutos y los segundos, pero en el caso que sólo le pasemos
un parámetro, considerará que son los segundos desde donde comenzará la cuenta atrás. Por ejemplo:

temporizador(77);      // le pasamos 77 segundos

temporizador(2,50);   // le pasamos 2 minutos y 50 segundos

 */
function temporizador(minutos, segundos) {
    if (segundos === undefined) { // Verificamos si se proporcionó solo un parámetro
        segundos = minutos;
        minutos = 0;
    }
    // Validamos los valores proporcionados
    if (typeof minutos !== 'number' || typeof segundos !== 'number' || minutos < 0 || segundos < 0) {
        document.write("Tienes que poner números positivos");
        return;
    }
    // Calculamos el tiempo total en segundos
    let tiempoTotal = minutos * 60 + segundos;
    // Creamos el intervalo que muestra el temporizador cada segundo
    const intervalo = setInterval(function () {
        // Calculamos minutos y segundos restantes
        let minutosRestantes = Math.floor(tiempoTotal / 60);
        let segundosRestantes = tiempoTotal % 60;
        // Mostramos el temporizador en consola
        document.write(`${minutosRestantes}:${segundosRestantes}<br>`);
        // Reducimos el tiempo total
        tiempoTotal--;
        // Verificamos si el temporizador llegó a cero
        if (tiempoTotal < 0) {
            clearInterval(intervalo);
            document.write("El tiempo ha terminado");
        }
    }, 1000); // Ejecutamos cada segundo
}

temporizador(77);


