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
  
  let errorMessage = $(".error-message");

  if ($("#formulario-contacto")[0].checkValidity()) {
    // Si el formulario es válido
    let formData = $("#formulario-contacto").serialize();

    $.post("solicitud.php", formData, function(response) {
     
      $("#formulario-contacto").slideToggle(1000, function() {
        
        let tituloForm = $("#tituloForm");
        $("<h2 class='text-center'>Mensaje enviado con éxito</h2>").insertAfter(tituloForm);
      });
    })
    .fail(function(error) {
      if (errorMessage.length === 0) {
        $("<p class='text-center error-message'>Error al enviar el formulario.</p>").insertBefore("#botonForm")

      }
    });
  } else {
    // Si el mensaje de error no existe, agregarlo y hacer parpadear en rojo
    if (errorMessage.length === 0) {
      $("<p class='text-center error-message'>Complete todos los campos obligatorios correctamente.</p>").insertBefore("#botonForm")
    }
  }
}



$(document).ready(function () {
  // Evento mouseover
  $("#imagenEmpresa").mouseover(function () {
    cambiarAppend("img/tienda-interior.jpg", "Nuestra tienda.");
    
  });

  // Evento mouseout
  $("#imagenEmpresa").mouseout(function () {
    cambiarPreppend("img/tienda.jpg", "Pasa el ratón sobre la imagen");
  });

  function cambiarAppend(nuevaImagen, nuevoTexto) {
    $("#imagenEmpresa").fadeOut(500, function () {
      $(this).attr("src", nuevaImagen).fadeIn(500);
    });

    $("#textoImagen").fadeOut(500, function () {
      $(this).text("");
      $(this).append(nuevoTexto).fadeIn(500);
    });
  }
  function cambiarPreppend(nuevaImagen, nuevoTexto) {
    $("#imagenEmpresa").fadeOut(500, function () {
      $(this).attr("src", nuevaImagen).fadeIn(500);
    });

    $("#textoImagen").fadeOut(500, function () {
      $(this).text(".");
      $(this).prepend(nuevoTexto).fadeIn(500);
    });
  }
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
    

    $(document).ready(function () {
     
      agregarClase();

    
      $(window).resize(function () {
        agregarClase();
      });

      function agregarClase() {
        let anchoPantalla = $(window).width();

 
        let elemento = $("#footer");

     
        let tamañoLimite = 768;

      
        if (anchoPantalla <= tamañoLimite) {
          elemento.addClass("text-center");
          $(".footer-list li").addClass("quitar-punto");
        } else {
          elemento.removeClass("text-center");
          $(".footer-list li").removeClass("quitar-punto");
        }
      }
    });

    $(document).ready(function () {

      $("#formulario-contacto input, #formulario-contacto textarea").on({
        focusin: function () {
          $(this).addClass("enfocado");
        },
        focusout: function () {
          $(this).removeClass("enfocado");
        }
      });
    });

    $(document).ready(function() {
      // Mostrar u ocultar el botón "Volver Arriba" dependiendo del desplazamiento
      $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
          $('#volverArriba').fadeIn();
        } else {
          $('#volverArriba').fadeOut();
        }
      });
  
      // Desplazarse hacia arriba al hacer clic en el botón "Volver Arriba"
      $('#volverArriba').click(function() {
        $('html, body').animate({scrollTop: 0}, 'fast');
      });
    });