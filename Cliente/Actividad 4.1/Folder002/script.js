//001 - Usando JavaScript, agrega una nueva fila a la tabla con los siguientes datos: "Pedro", "28", "Colombia".

// Obtén la referencia a la tabla por su ID
let tabla = document.getElementById('miTabla');

// Creamos una nueva fila con insertRow y agregamos celdas con los datos proporcionados con insertCell
let nuevaFila = tabla.insertRow();

let nombreCelda = nuevaFila.insertCell(0);
nombreCelda.innerHTML = 'Pedro';

let edadCelda = nuevaFila.insertCell(1);
edadCelda.innerHTML = '28';

let paisCelda = nuevaFila.insertCell(2);
paisCelda.innerHTML = 'Colombia';


//002- Cambia el nombre de "Carlos" a "Juan" y actualiza su edad a "26".


// Buscamos la fila que contiene el nombre "Carlos"
let filas = tabla.getElementsByTagName('tr');
for (let i = 0; i < filas.length; i++) {
    let celdas = filas[i].getElementsByTagName('td');
  for (let j = 0; j < celdas.length; j++) {
    if (celdas[j].innerHTML === 'Carlos') {
      // Cambiamos el nombre a Juan"
      celdas[j].innerHTML = 'Juan';
      // Avanzamos a la siguiente celda para actualizar la edad
      j++;
      if (celdas[j]) {
        celdas[j].innerHTML = '26';
      }
      // Rompemos el bucle ya que la información se ha actualizado
      break;
    }
  }
}


//003 - Selecciona y muestra en la consola el nombre de la persona que tiene la edad más alta en la tabla.
console.log("Actividad 003")

let edadMaxima = 0;
let nombrePersonaEdadMaxima = '';

// Buscamos en las filas de la tabla
for (let i = 1; i < tabla.rows.length; i++) {
  // Obtenemos la celda de la edad en la fila actual
  let celdaEdad = tabla.rows[i].cells[1];

  // Obtenemos el valor de la edad como entero
  let edad = parseInt(celdaEdad.innerHTML);

  // Verificamos si la edad actual es mayor que la edad
  if (edad > edadMaxima) {
    // Actualizamos la edad máxima y el nombre 
    edadMaxima = edad;
    nombrePersonaEdadMaxima = tabla.rows[i].cells[0].innerHTML;
  }
}

console.log('La persona con la edad más alta es: ' + nombrePersonaEdadMaxima+ ' y tiene '+edadMaxima+' años');

//004 -Agrega una nueva columna al final de cada fila con el texto "Acción" y dentro de cada celda de esta columna agrega un botón con el texto "Eliminar".
console.log("Actividad 004")


// Buscamos en las filas de la tabla
for (let i = 0; i < filas.length; i++) {
  // Creamos una nueva celda en la fila actual
  let nuevaCelda = filas[i].insertCell();

if(i==0){
     // Agregamos el texto "Acción" a la nueva celda en la primera fila
  nuevaCelda.innerHTML = 'Acción';
}else{

  // Creamos un nuevo botón
  let botonEliminar = document.createElement('button');
  botonEliminar.innerHTML = 'Eliminar';

  // Agregamos un evento click al botón
  botonEliminar.addEventListener('click', function () {
    // Obtemos la fila actual del botón
    let fila = this.parentNode.parentNode;

    // Eliminamos la fila
    fila.parentNode.removeChild(fila);
  });

  // Agregamos el botón a la nueva celda
  nuevaCelda.appendChild(botonEliminar);
}
}