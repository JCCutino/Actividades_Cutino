
let arbol = document.querySelector('ul');

// Recorremos los elementos li dentro del árbol
for (let li of document.querySelectorAll('li')) {

  // Mostramos el texto dentro del li (sin el subárbol)
  let textoLi = li.firstChild.nodeValue.trim();
  console.log('Texto dentro de ' + textoLi + ':', textoLi);

  //Contamos y mostramos el número de li anidados a este
  let liAnidados = li.getElementsByTagName('li').length;
  console.log('Número de li anidados dentro de ' + textoLi + ':', liAnidados);
}