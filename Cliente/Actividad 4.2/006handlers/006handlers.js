/*Hay un botón en la variable. No hay handlers en él.
¿Qué handlers se ejecutan con el click después del siguiente código? ¿Qué alertas se muestran?

button.addEventListener("click", () => alert("1"));
button.removeEventListener("click", () => alert("1"));
button.onclick = () => alert(2); */

/*Se verian el 1 y el 2 ya que el primero se ejecuta
porque aún no le ha afectado el remove, y el 2 no se llega a eliminar porque necesitas indicar
la misma función y aunque esta sea parecida no es la misma */