"use strict";
/*Escribe una función que cree una cuenta de usuario. La función debe tomar un nombre
de usuario y una dirección de correo electrónico como argumentos obligatorios. También
puede tomar un número de teléfono opcional. Si el número de teléfono no se proporciona,
la cuenta se creará sin él. */
function crearCuentaUsuario(nombreUsuario, correoElectronico, numeroTelefono) {
// Inicializamos un array con el nombre de usuario y el correo electrónico.
    let cuentaUsuario = [nombreUsuario,correoElectronico];

 // Si se proporciona un número de teléfono, lo agregamos al array utilizando el método concat.
    if (numeroTelefono !== undefined) {
        cuentaUsuario=cuentaUsuario.concat(numeroTelefono);
    }
  // Devolvemos el array que representa la cuenta de usuario.
    return cuentaUsuario;
}

//Creamos una cuenta sin numero de telefono
let cuenta1 = crearCuentaUsuario("Carlos", "karlos@gmail.com");
alert(cuenta1);


//Creamos una cuenta sin numero de telefono
let cuenta2 = crearCuentaUsuario("Jose", "pepe@gmail.com", "653727193");
alert(cuenta2);