// Obtenemos la referencia al botón y al div
let botonOcultar = document.getElementById('botonOcultar');
let textoDiv = document.getElementById('texto');

// Agregamos un evento de clic al botón
botonOcultar.addEventListener('click', function() {
  // Ocultamos el div al hacer clic en el botón
  textoDiv.style.display = 'none';
});