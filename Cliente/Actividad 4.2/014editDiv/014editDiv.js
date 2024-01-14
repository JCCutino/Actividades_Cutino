/*Crea un <div> que se vuelva <textarea> cuando es clicado.
El textarea permite editar HTML en <div>. Cuando el usuario presiona Enter o se pierde
el foco, el <textarea> se vuelve <div> de nuevo, y su contenido se vuelve el HTML del
<div>.
 */

function makeEditable() {
    let div = document.getElementById('editableDiv');

    // Creamos un elemento textarea
    let textarea = document.createElement('textarea');
    textarea.value = div.innerHTML;

    // Reemplazamos el div con el textarea
    div.replaceWith(textarea);

    // Enfocamos en el textarea
    textarea.focus();

    // Agregamos eventos para manejar Enter y perder el foco
    textarea.addEventListener('keydown', function (event) {
        if (event.key === 'Enter') {
            makeNonEditable(textarea);
        }
    });

    textarea.addEventListener('blur', function () {
        makeNonEditable(textarea);
    });
}

function makeNonEditable(textarea) {
    let div = document.createElement('div');
    div.className = 'editable';

    
    // Reemplazamos el textarea con el div
    textarea.replaceWith(div);

    div.id = "editableDiv";

    div.onclick = makeEditable

 
    div.innerHTML = textarea.value;
}