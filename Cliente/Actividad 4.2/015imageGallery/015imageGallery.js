/*
Crea una galería de imágenes donde la imagen principal
cambia al hacer clic en una miniatura. Como en Amazon, por ejemplo.
*/
function cambiarImagen(srcImagen) {
    let imagenPrincipal = document.getElementById('imagenPrincipal');
    imagenPrincipal.style.opacity = '0';

    setTimeout(() => {
      imagenPrincipal.src = srcImagen;
      imagenPrincipal.style.opacity = '1';
    }, 500);
  }