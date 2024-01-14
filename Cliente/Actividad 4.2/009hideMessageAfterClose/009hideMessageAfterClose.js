/*
009hideMessageAfterClose.html/.js: Dale funcionalidad al botón de cierre que has
creado para la lista de mensajes del ejercicio anterior. Es decir, haz que funcionen.
 
 */
//He leido este ejercicio despues que el otro, así que el codigo es exactamente igual porque ya habia implementado el cierre 

let listaMensajes = document.getElementById('listaMensajes');

// Agregamos un botón de cierre a cada mensaje
let mensajes = listaMensajes.querySelectorAll('.mensaje');
mensajes.forEach((mensaje) => {
  const botonCierre = document.createElement('span');
  botonCierre.classList.add('boton-cierre');
  botonCierre.innerHTML = '[X]'; 
  botonCierre.addEventListener('click', function () {
   
    mensaje.remove();
  });

  // Agregamos el botón de cierre al mensaje
  mensaje.appendChild(botonCierre);
});