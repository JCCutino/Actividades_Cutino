"use strict";


let listaEnlace = ["Inicio", "Acerca de nosotros", "Servicios", "Contacto"]


let saltoLinea= "<br>";
document.write("<h1>Ejemplo de JavaScript<h1/>");
document.write(saltoLinea);


document.write("<ul>")
for (let index = 0; index < listaEnlace.length; index++) {
    const element = listaEnlace[index];

    document.write("<li><a href='"+element+".html'>"+element+"</a></li>");
    
}
document.write("</ul>");
