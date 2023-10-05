"use strict";
/*Escribe una función que cree una cuenta de usuario. La función debe tomar un nombre
de usuario y una dirección de correo electrónico como argumentos obligatorios. También
puede tomar un número de teléfono opcional. Si el número de teléfono no se proporciona,
la cuenta se creará sin él. */
function crearCuentaUsuario(nombreUsuario, correoElectronico, numeroTelefono) {

    let cuentaUsuario = [nombreUsuario,correoElectronico];

 
    if (numeroTelefono !== undefined) {
        cuentaUsuario=cuentaUsuario.concat(numeroTelefono);
    }

    return cuentaUsuario;
}


let cuenta1 = crearCuentaUsuario("Carlos", "karlos@gmail.com");
alert(cuenta1);


let cuenta2 = crearCuentaUsuario("Jose", "pepe@gmail.com", "653727193");
alert(cuenta2);