"use strict";

//001-Usamos childNodes, seleccionamos y mostramos en la consola todos los nodos hijos del div con id contenedor.
console.log("Actividad 001")
let contenedor = document.getElementById("contenedor");
let hijos = contenedor.childNodes;
//Recorremos todos los hijos y lo mostramos
for (let i = 0; i < hijos.length; i++) {

    console.log(hijos[i]);
    
}

//002-Usamos firstChild, seleccionamos y mostramos en la consola el primer hijo del div con id contenedor.
console.log("Actividad 002")
let primerHijo = contenedor.firstChild;
console.log(primerHijo);

//003- Usanmos lastChild, seleccionamos y mostramos en la consola el último hijo del div con id contenedor.
console.log("Actividad 003")
let ultimoHijo = contenedor.lastChild;
console.log(ultimoHijo);

//004- Usamos parentElement, seleccionamos y mostramos en la consola el elemento padre del h1.
console.log("Actividad 004")
let elemtoH1 = document.getElementsByTagName('h1')[0];
let elementoPadre = elemtoH1.parentElement;
console.log(elementoPadre);

//005- Usamos children, seleccionamos y mostramos en la consola todos los elementos hijos de la lista desordenada (ul).
console.log("Actividad 005")
let elementoUl = document.getElementsByTagName('ul')[0];
let hijosUl = elementoUl.children;

    console.log(hijosUl);


//006- Usamos firstElementChild, seleccionamos y mostramos en la consola el primer elemento hijo del div con id contenedor.
console.log("Actividad 006")
let primerElementoHijo = contenedor.firstElementChild;

console.log(primerElementoHijo);


//007- Usamos lastElementChild, seleccionamos y mostramos en la consola el último elemento hijo del div con id contenedor.
console.log("Actividad 007")
let ultimoElementoHijo = contenedor.lastElementChild;
console.log(ultimoElementoHijo);

//008 -Usamos previousElementSibling, seleccionamos y mostramos en la consola el elemento anterior al párrafo con clase parrafo.
console.log("Actividad 008")
let elementoParrafo = document.querySelector('.parrafo');
let hermanoAnterior = elementoParrafo.previousElementSibling;
console.log(hermanoAnterior);

//009 - Usamos nextElementSibling, seleccionamos y mostramos en la consola el elemento siguiente al párrafo con clase parrafo.
console.log("Actividad 009")
let hermanoPosterior= elementoParrafo.nextElementSibling;
console.log(hermanoPosterior);

//010- Usamos JavaScript, seleccionamos el primer elemento li dentro de la lista y mostramos en la consola su nodeType, nodeName y tagName.
console.log("Actividad 010")
let elementoPrimerLi = document.querySelector('ul li');
console.log('nodeType:', elementoPrimerLi.nodeType);
console.log('nodeName:', elementoPrimerLi.nodeName);
console.log('tagName:', elementoPrimerLi.tagName);

//011- Usamos JavaScript, seleccionamos el enlace (<a>) y mostramos en la consola su innerHTML y outerHTML.
console.log("Actividad 011")
let elementoEnlace = document.querySelector('a');
console.log('innerHTML:', elementoEnlace.innerHTML);
  console.log('outerHTML:', elementoEnlace.outerHTML);

//012 -Usamos JavaScript, seleccionamos el párrafo con clase parrafo y mostramos en la consola su nodeValue y textContent.
console.log("Actividad 012")
console.log('nodeValue:', elementoParrafo.nodeValue);
  console.log('textContent:', elementoParrafo.textContent);

//013- Usamos JavaScript, seleccionamos el div con id contenedor y verificamos si tiene el atributo hidden. Si lo tiene, mostramos en la consola 
//"El elemento está oculto", de lo contrario, mostramos "El elemento no está oculto".*/
console.log("Actividad 013")

    // Verificamos si el atributo hidden está presente
    if (contenedor.hasAttribute('hidden')) {
      console.log('El elemento está oculto.');
    } else {
      console.log('El elemento no está oculto.');
    }
