/*
Tenemos un <select>:

<select id="genres">
  <option value="rock">Rock</option>
  <option value="blues" selected>Blues</option>
</select>
Utiliza JavaScript para:

Mostrar el valor y el texto del option seleccionado.
Añadir un option: <option value="classic">Classic</option>.
Seleccionarlo.
Nota, si haz hecho todo bien, tu alert debería mostrar blues.*/
 

 let opciones = genres.options[genres.selectedIndex];
 alert( opciones.value );
 
 let nuevaOpcion = new Option("Classic", "classic");
 genres.append(nuevaOpcion);

 nuevaOpcion.selected = true;