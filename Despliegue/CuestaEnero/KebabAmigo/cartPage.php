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
            </ul>
        </div>

        <!-- Íconos de carrito y usuario -->
        <div class="d-flex">
            <a class="nav-link" href="cartPage.php"><i class="fa-solid fa-cart-shopping" style="color: #ffffff; font-size:30px;"></i></a>
        </div>
    </div>
</nav>
        </header>
        <main>
    
        <?php include("components/banner.php") ?>

        <div class="container mt-5">

        <div class="row justify-content-center align-items-center g-2">
    <div class="col">
        <?php if (isset($_SESSION['resultOrder']) && $_SESSION['resultOrder'] === true): ?>
            <div class="card bg-success text-white mt-3 mb-3">
                <div class="card-body">
                    <h5 class="card-title">Pedido Aceptado</h5>
                    <p class="card-text">Tu pedido ha sido aceptado correctamente.</p>
                </div>
            </div>
        <?php elseif (isset($_SESSION['resultOrder']) && $_SESSION['resultOrder'] === false): ?>
            <div class="card bg-danger text-white mt-3 mb-3">
                <div class="card-body">
                    <h5 class="card-title">Pedido Eliminado</h5>
                    <p class="card-text">Tu pedido ha sido eliminado.</p>
                </div>
            </div>
        <?php endif; 
        $_SESSION['resultOrder'] = null?>
    </div>
</div>

        

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


    
     <div class="d-flex justify-content-between align-items-center">
        <div>
            <h3>Total:  <?php echo isset($_SESSION['cart_total']) ? $_SESSION['cart_total'] : 0 ?>€</h3>
           
        </div>
        <div class="d-flex">
        <form action="confirmOrder.php" method="post">
         <button type="submit" class="btn btn-success ml-2">Confirmar</button>
        </form>
           <!-- Deletion form -->
        <form action="deleteOrder.php" method="post">
            <button type="submit" class="btn btn-danger ml-2">Eliminar</button>
        </form>

        </div>
    </div>
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
