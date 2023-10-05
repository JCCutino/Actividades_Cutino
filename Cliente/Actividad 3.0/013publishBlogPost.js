"use strict";
/*Escribe una función flecha que cree una publicación de blog. La función debe tomar
un título y un contenido como argumentos obligatorios. También puede tomar una lista
de etiquetas opcional. Si no se proporcionan etiquetas, la publicación se creará sin ellas.
*/
// La función crearPublicacion crea un array que representa una publicación con título, contenido y etiquetas.
const crearPublicacion = (titulo, contenido, ...etiquetas) => {
    return [titulo, contenido, ...etiquetas];
};
//Creamos y mostramos la primera publicacion con etiquetas
const primeraPublicacion = crearPublicacion("Mi primera publicacion", "Este es el contenido de la publicacion", ["JS", "HTML"]);
alert(primeraPublicacion);
//Creamos y mostramos la segunda publicacion sin etiquetas
const segundaPublicacion = crearPublicacion("Mi segunda publicacion", "Llueven botellas mientras suena una de Rauw");
alert(segundaPublicacion);
