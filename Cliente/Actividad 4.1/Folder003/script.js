//001 - Usando JavaScript, selecciona el enlace (<a>) y verifica si tiene el atributo target. 
//Si lo tiene, imprime en la consola su valor, de lo contrario, imprime "El atributo target no está presente".

console.log("Actividad 001")
// Obtenemos el elemento enlace (<a>) por su etiqueta
let elementoEnlace = document.querySelector('a');

  // Verificamos si el atributo target está
  if (elementoEnlace.hasAttribute('target')) {
    // Mostramos el valor del atributo target
    console.log('El valor del atributo target es:', elementoEnlace.getAttribute('target'));
  } else {
    console.log('El atributo target no está presente.');
  }

//002 - Usando JavaScript, selecciona el primer elemento li dentro de la lista y verifica si tiene el atributo data-tipo.
// Si lo tiene, imprime en la consola su valor, de lo contrario, imprime "El atributo data-tipo no está presente".

console.log("Actividad 002")
// Obtenemos el primer elemento li dentro de la lista
let elementoLi = document.querySelector('ul li');

  // Verificamos si el atributo data-tipo está presente
  if (elementoLi.hasAttribute('data-tipo')) {
    // Mostramos el valor del atributo target data-tipo
    console.log('El valor del atributo data-tipo es:', elementoLi.getAttribute('data-tipo'));
  } else {
    console.log('El atributo data-tipo no está presente.');
  }


//003 - Usando JavaScript, selecciona el párrafo con clase parrafo y cambia su atributo 
//data-tipo a "nuevo-parrafo". Luego, imprime en la consola el nuevo valor del atributo.
console.log("Actividad 003")
let elementoParrafo = document.querySelector('.parrafo');

  // Cambiamos el valor del atributo data-tipo a nuevo-parrafo
  elementoParrafo.setAttribute('data-tipo', 'nuevo-parrafo');

  // Mostramos el valor del atributo data-tipo
  console.log('El nuevo valor del atributo data-tipo es:', elementoParrafo.getAttribute('data-tipo'));


//004 - Usando JavaScript, selecciona el título (<h1>) y agrega un nuevo atributo llamado style con el valor color: blue;.

let elementoTitulo = document.querySelector('h1');
  // Agregamos un nuevo atributo style con el valor color: blue;
  elementoTitulo.setAttribute('style', 'color: blue;');



//005 - Usando JavaScript, selecciona el primer elemento li y elimina su atributo data-tipo. Luego, imprime en la consola la lista de atributos restantes.
console.log("Actividad 005")
//Borramos el atributo data-tipo
elementoLi.removeAttribute('data-tipo');

// Mostramos en la consola la lista de atributos restantes
console.log('Atributos restantes:', elementoLi.attributes);

//006 - Usando JavaScript, selecciona el enlace (<a>) y verifica si tiene algún atributo personalizado 
//en el dataset. Si los tiene, imprime en la consola todos los atributos personalizados presentes.
console.log("Actividad 006")
  // Obtemos el objeto dataset que contiene todos los atributos personalizados
  let dataset = elementoEnlace.dataset;

  // Verificamos si hay algún atributo personalizado en el dataset
  if (Object.keys(dataset).length > 0) {
    // Mostramos en la consola todos los atributos personalizados presentes
    console.log('Atributos personalizados presentes:', dataset);
  } else {
    console.log('No hay atributos personalizados en el dataset.');
  }

