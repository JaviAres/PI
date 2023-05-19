<!doctype html>
<html lang="en">

<head>
  <title>El maletín de Kaiba</title>
  <!-- Etiquetas Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="images/icono-tienda.ico" type="image/x-icon">
  <!-- Bootstrap CSS v5.2.1 -->  
  <link rel="stylesheet" href="css/styles.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
  <header>
    <!--Navbar no fluida, peta en otros dispositivos, revisar mas adelante-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/logo-tienda.png" alt="Logo Tienda" id="logo"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Elige tu TCG
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Yu-Gi-Oh</a></li>
                <li><a class="dropdown-item" href="#">Digimon TCG</a></li>
              </ul>
            </li>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="¿Buscas algo concreto?" aria-label="Search" style="margin-left:350px; width:500px">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
        <div class="row" style="margin: 10px;">
          <a href="html/user.html"><p style="color: white;">Usuario</p></a>
        </div>
        <div class="row" style="margin: 10px;">
          <a href="html/cart.html">
          <p style="color:white">
            Carrito
          </p>
          </a>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <!--Carrusel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/photon_hypernova.jpg" class="d-block w-100" alt="Primera Imagen">
          <div class="carousel-caption d-none d-md-block">
            <h1> Photon Hypernova</h5>
            <p>En este nuevo set se encuentran los nuevos Kashtira y soporte para los ojos galacticos</p>
            <a href="#"><button type="button" class="btn btn-dark">¡Ver Ahora!</button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/cyberstorm_access.png" class="d-block w-100" alt="Segunda Imagen">
          <div class="carousel-caption d-none d-md-block">
            <h1>Cyberstorm Access</h5>
            <p>Mejora tus mazos Ciberso con la nueva expansion!</p>
            <a href="#"><button type="button" class="btn btn-dark">¡Ver Ahora!</button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/magnificentmavens.png" class="d-block w-100" alt="Tercera Imagen">
          <div class="carousel-caption d-none d-md-block">
            <h1>Expertas Magníficas</h5>
            <p> Hazte con soporte para arquetipos como Tearalaments y Sky Striker.</p>
            <a href="php/producto.php"><button type="button" class="btn btn-dark">¡Ver Ahora!</button></a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--Contenido, Novedades y enlaces-->
    <div class="container-fluid" id="novedades">
      <div class="d-flex justify-content-between align-items-center w-100 mb-4 pb-1 border-bottom border-dark"><h2>Tendencias</h2></div>
        <div class="row" id="tendencias">
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="images/photonbox.png" class="card-img-top" alt="foto producto"  id="imagen_tendencia">
              <div class="card-body">
                <h5 class="card-title">Photon Hypernova Booster Box</h5>
                <p class="card-text">Una caja con 20 sobres de la expansion Photon Hypernova</p>
                <a href="html/producto.html" class="btn btn-primary">¡Ver Ahora!</a>
              </div>
            </div>
          </div>
          <div class="col"> 
            <div class="card" style="width: 18rem;">
              <img src="images/structuredw.png" class="card-img-top" alt="foto producto"  id="imagen_tendencia">
              <div class="card-body">
                <h5 class="card-title">Deck de estructura Mundo Oscuro</h5>
                <p class="card-text">Un deck pre hecho de los monstruos Mundo Oscuro</p>
                <a href="html/producto.html" class="btn btn-primary">¡Ver Ahora!</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="images/magnificentmavensbox.png" class="card-img-top" alt="foto producto" id="imagen_tendencia">
              <div class="card-body">
                <h5 class="card-title">Magnificent Mavens Box</h5>
                <p class="card-text">Un set especial con 5 sobres con rareza alta asegurada y fundas exclusivas</p>
                <a href="php/producto.php" class="btn btn-primary">¡Ver Ahora!</a>
              </div>
            </div>
          </div>
          </div>
        </div>
    </div>
<hr>
   <div class="container-fluid">
      <div class="row">
        <div class="col" id="merchandising">
          <h2 id="titulo_menu">Nuevo merchandising</h2>
          <hr>
        <div class="row">
        <div class="content">
            <a href="php/merchandising.php">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/albazplaymat.png" id="imagen_merchandising" alt="imagen menu merchandising">
            <div class="content-details fadeIn-bottom">
              <h3 class="content-title">Merchandising</h3>
              <p class="content-text">¡Busca algo que te ayude a jugar mas comodamente!</p>
            </div>
            </a>
        </div></div>
        </div>
        <div class="col" id="reserva">
          
          <h2 id="titulo_menu">Reserva una mesa</h2>
          <hr><div class="row">
          <div class="content">
              <a href="php/reservas.php">
              <div class="content-overlay"></div>
              <img class="content-image" src="images/mesa_juegos.jpg" id="imagen_reservas" alt="imagen menu reservas">
              <div class="content-details fadeIn-bottom">
                <h3 class="content-title">Reservas</h3>
                <p class="content-text">¡Reserva una mesa en el local!</p>
              </div>
            </a>
          </div></div>
          </div>
       
      </div>
    </div>
  
  </main>

  <footer class="bg-dark text-center text-white">
    <div class="container p-4">
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i>
        </a>
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i>
        </a>
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i>
        </a>
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i>
        </a>
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i>
        </a>
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/JaviAres" role="button">
          <i class="fab fa-github"></i>
        </a>
      </section>
      <section class="">
        <form action="">
          <div class="row d-flex justify-content-center">
            <div class="col-auto">
              <p class="pt-2">
                <strong>¿Quieres que te avisemos de las novedades? Inscribete:</strong>
              </p>
            </div>
            <div class="col-md-5 col-12">
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example21" class="form-control" />
                <label class="form-label" for="form5Example21">Correo Electrónico</label>
              </div>
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-outline-light mb-4">
                Suscribir
              </button>
            </div>
          </div>
        </form>
      </section>
      <section class="mb-4">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
          repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
          eum harum corrupti dicta, aliquam sequi voluptate quas.
        </p>
      </section>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="index.html">EL Maletin De Kaiba</a>
    </div>
  </footer>
  <!-- Bootstrap JavaScript Libraries --> 
  <script src="js/bootstrap.min.js"></script>
</body>
</html>