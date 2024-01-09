
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Tu Marca</a>

        <!-- Botón para dispositivos pequeños -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenido del menú -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Kebab Amigo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ubicación</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menú Desplegable
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Opción 1</a></li>
                        <li><a class="dropdown-item" href="#">Opción 2</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Opción 3</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Íconos de carrito y usuario -->
        <div class="d-flex">
            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></a>
            <a class="nav-link" href="#"><i class="fa-solid fa-user ml-5" style="color: #ffffff;"></i></a>
        </div>
    </div>
</nav>