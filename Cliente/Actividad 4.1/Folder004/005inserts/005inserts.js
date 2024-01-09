/**
  createTextNode vs innerHTML vs textContent:

Tenemos un elemento DOM vacío elem y un string text.

¿Cuáles de estos 3 comandos harán exactamente lo mismo? Pon un ejemplo.

elem.append(document.createTextNode(text))

elem.innerHTML = text

elem.textContent = text

 */
/*
elem.append(document.createTextNode(text)):

Utilizamos document.createTextNode(text) para crear un nodo de texto con el contenido de la variable text.
Luego, usamos el método append para agregar ese nodo de texto como un hijo del elemento elem.

elem.innerHTML = text:

El uso de elem.innerHTML el contenido HTML del elemento elem directamente con el valor de la variable text.

elem.textContent = text:

elem.textContent establecemos el contenido de texto plano del elemento elem con el valor de la variable text.
A diferencia de innerHTML, textContent trata el contenido como texto plano y no interpreta las etiquetas HTML en el contenido.

----------------------------------------------------------------------------------------------------------

Las opciones 1 y 3 (elem.append(document.createTextNode(text)) y elem.textContent = text) 
hacen lo mismo: agregan el contenido de la variable text como texto puro al elemento correspondiente.

La opción 2 (elem.innerHTML = text) asigna el contenido HTML de la variable text al elemento elem2.
 Esto significa que, si el contenido de text incluye etiquetas HTML, estas se interpretan y se agregan al DOM como elementos HTML .
*/
