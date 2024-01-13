/*
002paintClock.html/.js: Reloj coloreado con setInterval.
   Usa HTML/CSS para el estilo, JavaScript solamente actualiza la hora en elements.

*/
let intervalo;
let relojActivo = true
function actualizarRelojDigital() {
   let ahora = new Date();
   let horas = ahora.getHours().toString().padStart(2, '0');
   let minutos = ahora.getMinutes().toString().padStart(2, '0');
   let segundos = ahora.getSeconds().toString().padStart(2, '0');


if (relojActivo) {
   let relojDigital = document.getElementById('reloj');
   relojDigital.innerHTML = `<span class="horas">${horas}</span>:<span class="minutos">${minutos}</span>:<span class="segundos">${segundos}</span>`;
}
  
}

function startReloj() {
  intervalo = setInterval(actualizarRelojDigital, 1000);
  relojActivo = true
}

function stopReloj() {
  clearInterval(intervalo);
  let relojDigital = document.getElementById('reloj');
   relojDigital.innerHTML = `<span class="horas">hh</span>:<span class="minutos">mm</span>:<span class="segundos">ss</span>`;
  relojActivo = false
}


document.getElementById('start-btn').addEventListener('click', startReloj);
document.getElementById('stop-btn').addEventListener('click', stopReloj);


actualizarRelojDigital();
