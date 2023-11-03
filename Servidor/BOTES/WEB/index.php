<?php
include_once('consultas.php')
?>
<!doctype html>
<html lang="en">

<head>
  <title>BOTES SA</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h2 class="title nav-item">BARCOS SA</h2>
        <a class="navbar-item" href="#"><img src="Imagenes/Logotipo e Iconos/bitmap.svg" alt="Logo" width="100">

        
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Barcos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Historia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
  <div class="container mt-5">
      
        <section class="row">
            <div class="col-md-6">
                <img src="Imagenes/batalla_guadalcanal.png" alt="Batalla de Guadalcanal">
            </div>
            <div class="col-md-6">
                <h1>Batalla de Guadalcanal</h1>
                <hr>
                <p>La Batalla de Guadalcanal, ocurrida durante la Segunda Guerra Mundial, fue un enfrentamiento crucial en el Pacífico. Esta batalla ferozmente disputada en la isla de Guadalcanal involucró combates navales y terrestres entre las fuerzas estadounidenses y japonesas. La victoria estadounidense en Guadalcanal marcó un punto de inflexión en el Teatro del Pacífico, debilitando la capacidad de Japón para realizar operaciones ofensivas en la región y allanando el camino para futuras victorias aliadas en la guerra.</p>
                <?php echo listarBatallaGuadalcanal($conn); ?>
            </div>
        </section>

       
        <section class="row mt-5">
            <div class="col-md-6">
                <h1>Paises con Acorazados y Cruceros en la Segunda Guerra Mundial</h1>
                <hr>
                <p>En el contexto de la Segunda Guerra Mundial, varios países desplegaron acorazados y cruceros en el conflicto. Estados Unidos, Japón, Reino Unido y otras naciones contribuyeron con una variedad de buques de guerra a esta guerra global. La presencia de estos barcos tuvo un impacto significativo en el resultado de la guerra y en la estrategia general en el conflicto.</p>
                <?php echo encontrarPaisesConAcorazadosYCruceros($conn); ?>
            </div>
            <div class="col-md-6">
                <img src="Imagenes/acorazado_bismarck.jpg" alt="Barcos involucrados">
            </div>
        </section>

  
        <section class="row mt-5">
            <div class="col-md-6">
                <img src="Imagenes/batalla_jutlandia.jpg" alt="Batallas navales">
            </div>
            <div class="col-md-6">
                <h1>Batallas navales en la Segunda Guerra Mundial con 3 barcos del mismo país</h1>
                <hr>
                <p>Durante la Segunda Guerra Mundial, se libraron batallas navales en las que tres barcos de la misma nación se enfrentaron a fuerzas enemigas. Estas confrontaciones intensas reflejaron la tenacidad y la determinación de las tripulaciones de los buques en medio de un conflicto global. Las tácticas, estrategias y acciones de combate desempeñaron un papel crucial en estas batallas navales.</p>
                <?php echo encontrarBatallasConTresBarcosDelMismoPais($conn); ?>
            </div>
        </section>

       
        <section class="row mt-5">
            
            <div class="col-md-6">
                <h1>País con más cañones en la Segunda Guerra Mundial</h1>
                <hr>
                <p>En el contexto de la Segunda Guerra Mundial, varias naciones desplegaron una amplia gama de buques de guerra equipados con numerosos cañones. Japón, con un total de 201 cañones en sus buques, destacó por su capacidad de fuego en medio de la contienda global. La potencia de fuego de los cañones desempeñó un papel crucial en los combates y estrategias de guerra en ese período.</p>
                <?php echo encontrarPaisesConMasCaniones($conn); ?>
            </div>
            <div class="col-md-6">
                <img src="Imagenes/barco_yamato.jpg" alt="Cañones en la Segunda Guerra Mundial">
            </div>
        </section>

        <section class="row mt-5">
    <div class="col-md-6">
        <img src="Imagenes/barco_kongo.jpg" alt="Barcos de Clase Kongo">
    </div>
    <div class="col-md-6">
        <h1>Barcos de Clase Kongo</h1>
        <hr>
        <p>Los barcos de Clase Kongo fueron una serie de cuatro acorazados de la Armada Imperial Japonesa que sirvieron en la primera mitad del siglo XX. Nombrados en honor a las montañas Kongo, estos acorazados destacaron por su velocidad y potencia de fuego. Durante su servicio, participaron en diversas operaciones, incluyendo la Primera Guerra Mundial y la Segunda Guerra Mundial. Los Clase Kongo representaron una parte significativa de la flota naval japonesa en un período de cambios e innovaciones en la guerra naval.</p>
       <?php echo encontrarBatallaClaseKongo($conn);?>
    </div>
    </div>
  </main>
  <footer class="bg-dark text-white text-center py-3">
    <div class="container">
        <p>&copy; 2023 Botes S.A.</p>
        <p>Contacto: info@botes.com</p>
    </div>
</footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>