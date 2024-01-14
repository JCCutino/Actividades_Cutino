/*
 Agregar un botón de cierre: Hay una lista de mensajes.
Usa JavaScript para agregar un botón de cierre en la esquina superior derecha de cada
mensaje. El resultado debería verse algo así:
 */

let listaMensajes = document.getElementById('listaMensajes');

// Agrega un botón de cierre a cada mensaje
let mensajes = listaMensajes.querySelectorAll('.mensaje');
mensajes.forEach((mensaje) => {
  const botonCierre = document.createElement('span');
  botonCierre.classList.add('boton-cierre');
  botonCierre.innerHTML = '[X]'; 
  botonCierre.addEventListener('click', function () {
   
    mensaje.remove();
  });

  // Agrega el botón de cierre al mensaje
  mensaje.appendChild(botonCierre);
});