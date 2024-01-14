// Seleccionamos la lista y obtenemos todos los elementos de la lista
let listaSeleccionable = document.getElementById('listaSeleccionable');
let listaItems = listaSeleccionable.getElementsByTagName('li');

// Handler de clic para cada elemento de la lista
for (let i = 0; i < listaItems.length; i++) {
    listaItems[i].addEventListener('click', function (event) {
        // Si Ctrl está presionado, cambiamos el estado de selección solo para este elemento
        if (event.ctrlKey || event.metaKey) {
            this.classList.toggle('selected');
        } else {
            // Si no, deseleccionamos todos los demás y selecciona solo este elemento
            for (let j = 0; j < listaItems.length; j++) {
                if (listaItems[j] !== this) {
                    listaItems[j].classList.remove('selected');
                }
            }
            this.classList.add('selected');
        }
    });
}