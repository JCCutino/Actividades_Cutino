let num1, num2; // Definimos las variables fuera de la función para que estén disponibles globalmente

$(document).ready(function () {
    // Generamos números aleatorios para el captcha
    num1 = Math.floor(Math.random() * 10) + 1;
    num2 = Math.floor(Math.random() * 10) + 1;

    // Mostramos números aleatorios en el captcha
    $("#num1").text(num1);
    $("#num2").text(num2);

    // Validamos el resultado del captcha en tiempo real
    $("#resultadoCaptcha").on("input", function () {
        validarCaptcha();
    });
});

function validarCaptcha() {
    let resultadoUsuario = parseInt($("#resultadoCaptcha").val());
    let resultadoCorrecto = num1 + num2;

    if (resultadoUsuario === resultadoCorrecto) {
        $("#respuestaCaptcha").html('<i class="fas fa-check" style="color: green;"></i>');
        return true;
    } else {
        $("#respuestaCaptcha").html('<i class="fas fa-times" style="color: red;"></i>');
        return false;
    }
}

function enviarFormulario() {
    // Validamos campos obligatorios y política de privacidad
    if ($("#formulario-contacto")[0].checkValidity() && validarCaptcha()) {
        alert("Formulario válido. Enviando datos al servidor.");
 
    } else {
        alert("Por favor, complete todos los campos obligatorios, acepte la política de privacidad y resuelva correctamente el captcha.");
    }
}


    $(document).ready(function () {
      // Evento mouseover/mouseout para cambiar opacidad y mostrar texto con fadeIn()
      $("#imagenEmpresa").hover(
        function () {
          $("#imagenEmpresa").fadeOut(500, function () {
            $(this).attr("src", "img/tienda-interior.jpg").fadeIn(500);
          });
          $("#textoImagen").fadeOut(500, function () {
            $(this).text("Nuestra tienda").fadeIn(500);
          });
        },
        function () {
          $("#imagenEmpresa").fadeOut(500, function () {
            $(this).attr("src", "img/tienda.jpg").fadeIn(500);
          });
          $("#textoImagen").fadeOut(500, function () {
            $(this).text("Pasa el ratón sobre la imagen").fadeIn(500);
          });
        }
      );
    });


    $(document).ready(function () {
      $(".accordion-header").click(function () {
      
        let elementoClickado = $(this).next(".accordion-body");
    
       
        let otrosElementos = $(".accordion-body").not(elementoClickado);
    
      
        otrosElementos.each(function () {
          $(this).slideUp();
        });
    
      
        elementoClickado.slideToggle();
    
      
      });
    });
    