<div class="header">
   <!-- <h1>Este es el header</h1> -->
   <div align="center"><img src="img/logo.png" alt="">
   </div>
  

    <div class="menu-header">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
            <a class="nav-link" href="#">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="cargar('main','quienessomos/quienessomos.php')">¿Quienes somos?</a>
            </li>





            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Productos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#" onclick="cargar('main','productos/mesas.php')">Mesas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" onclick="cargar('main','productos/sillas.php')">Sillas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" onclick="cargar('main','productos/salas.php')">Salas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" onclick="cargar('main','productos/recamaras.php')">Recamaras</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"onclick="cargar('main','productos/novedades.php')">Novedades</a>
                </div>
             


            </li>

        
            <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
            </li>
        
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>

    </div>
</div>