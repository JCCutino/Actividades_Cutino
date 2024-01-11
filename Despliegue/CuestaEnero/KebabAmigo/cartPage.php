<?php session_start();?>
<!doctype html>
<html lang="en">
    <head>
        <title>Kebab Amigo - Carrito</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/f9a29f74f0.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <header>  
            
<nav class="navbar navbar-expand-lg navbar-dark red">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logo_kebab.png" alt=""></a>

        <!-- Botón para dispositivos pequeños -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenido del menú -->
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Kebab Amigo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#about">Sobre nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#productos">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Ubicación</a>
                </li>
            </ul>
        </div>

        <!-- Íconos de carrito y usuario -->
        <div class="d-flex">
            <a class="nav-link" href="cartPage.php"><i class="fa-solid fa-cart-shopping" style="color: #ffffff; font-size:30px;"></i></a>
            <a class="nav-link icono-nav" href="#"><i class="fa-solid fa-user" style="color: #ffffff; font-size:30px;"></i></a>
        </div>
    </div>
</nav>
        </header>
        <main>
    
        <?php include("components/banner.php") ?>

        <div class="container mt-5">
    <h2>Pedido Total</h2>

   
    <table class="table">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
        </tr>
        </thead>
        <tbody>
        <?php



if (isset($_SESSION['cart'])) {
   
    foreach ($_SESSION['cart'] as $cartItem) {
        echo '<tr>';
        echo ' <td><img src="'. $cartItem['photo'].'" alt="Product Image" style="max-width: 125px;"></td>';
        echo '<td>' . $cartItem['name'] . '</td>';
        echo '<td>' . $cartItem['price'] . '€</td>';
        echo '</tr>';
    }
  

   
   
} else {
    echo '<p>No tienes ningún producto.</p>';
}
?> 
        </tbody>
    </table>


    <div class="mt-4 border-top d-flex justify-content-between align-items-center">
        <h5>Total:</h5>
    
        <span class="badge badge-primary badge-pill black">  <?php echo '<h3>' . $_SESSION['cart_total'] . '€</h3>';?></span>
        
    </div>
</div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
