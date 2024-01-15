window.onload = function () {
    let IMAGENES = [
        'img/taylor-swift.png',
        'img/fearless.jpg',
        'img/speak-now.webp',
        'img/red.png',
        'img/1989.jpg',
        'img/reputation.jpg',
        'img/lover.webp',
        'img/folklore.jpg',
        'img/evermore.jpg',
        'img/midnights.png'

    ];
   
    let posicionActual = 0;
    let $botonRetroceder = document.querySelector('#retroceder');
    let $botonAvanzar = document.querySelector('#avanzar');
    let $imagen = document.querySelector('#imagen');
   

   

   
    function pasarFoto() {
        if(posicionActual >= IMAGENES.length - 1) {
            posicionActual = 0;
        } else {
            posicionActual++;
        }
        renderizarImagen();
    }

   
    function retrocederFoto() {
        if(posicionActual <= 0) {
            posicionActual = IMAGENES.length - 1;
        } else {
            posicionActual--;
        }
        renderizarImagen();
    }

    
    function renderizarImagen () {
        $imagen.style.backgroundImage = `url(${IMAGENES[posicionActual]})`;
    }


    $botonAvanzar.addEventListener('click', pasarFoto);
    $botonRetroceder.addEventListener('click', retrocederFoto);

    renderizarImagen();

    setInterval(pasarFoto, 5000);
}