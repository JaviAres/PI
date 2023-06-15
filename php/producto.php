<?php
session_start();
include "../utiles_php/conexiondb.php";
$producto=$_COOKIE["producto"];
$id= $_COOKIE["id"];
$producto_query="SELECT * FROM ".$producto." WHERE id= ".$id.""; 
$q=$con->query($producto_query);
$p=$q->fetch_object();
?>
<!doctype html>
<html lang="en">

<head>
  <title>El maletín de Kaiba</title>
  <!-- Etiquetas Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="../images/icono-tienda.ico" type="image/x-icon">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php"><img src="../images/logo-tienda.png" alt="Logo Tienda" id="logo"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <form class="d-flex" action="../utiles_php/busqueda.php" method="POST">
            <input class="form-control me-2" type="text" placeholder="¿Buscas algo concreto?" aria-label="Buscar" name="busqueda" style="margin-left:350px; width:500px">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
          </div>
          <div class="row" style="margin: 10px;">
            <p style="color: white;"><?php echo($_SESSION["user"]["nombre"])?></p>
          </div>
          <div class="row" style="margin: 10px;">
            <a href="carrito.php">
            <p style="color:white">
              Carrito
            </p>
            </a>
          </div>
        </div>
      </nav>
  </header>
  <main>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <img src="<?php echo $p->imagen ?>" alt="Imagen Producto" class="img-fluid" style="width:500px; margin-top:50px; margin-left:100px">
            </div>
            <div class="col"style="margin-top:50px">
                <h1 style="margin-top: 20px;"><?php echo $p->nombre?></h1> 
                <div class="row">
                  <div class="row" id="dato_producto">
                    <div class="col" >
                        <h5>Impreso en:</h5>
                    </div>
                    <div class="col">
                        <h5><?php if($_COOKIE["producto"]=="cartas"){echo $p->rareza;}else{echo ("");}?></h5>
                    </div>
                  </div>
                <div class="row" id="dato_producto">
                    <div class="col">
                        <h5>Reimpreso en: </h5>
                    </div> 
                    <div class="col">
                        <h5><?php if($_COOKIE["producto"]=="cartas"){echo $p->expansion;}else{echo ("");}?></h5>
                    </div>
                 </div>
                 <div class="row" id="dato_producto">
                    <div class="col">
                        <h5>Precio: </h5>
                    </div> 
                    <div class="col">
                        <h5><?php echo $p->precio?>€</h5>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col">
                        <h5>Descripcion Producto:</h5>
                    </div>
                    <div class="row">
                            <div class="col">
                        <p> <?php if($_COOKIE["producto"]=="cartas"){echo $p->texto;}else{echo $p->descripcion;}?></p>
                        </div>
                    </div>
                   <div class="row">
                    <div class="col" style="margin-bottom: 10px;">
                    <form class="form-inline" method="post" action="../utiles_php/añadirCarrito.php">
                    <input type="hidden" name="product_id" value="<?php echo $p->id; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $p->nombre;?>">
                      <div class="form-group" style="display:flex">
                      <?php
	                    $found = false;

	                    if(isset($_SESSION["cart"])){ foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$p->id && $c["product_name"]==$p->nombre){ $found=true; break; }}}
	                    ?>
                      <?php if($found):?>
		                    <a href="carrito.php" class="btn btn-primary btn-lg" style="background-color:#6e3dcf">Agregado</a>
	                    <?php else:?>
                        <input type="number" name="q" value="1" style="width:100px; margin-right:20px;" min="1" class="form-control" placeholder="Cantidad">
	                    <button type="submit" class="btn btn-primary btn-lg" style="background-color:#6e3dcf">Agregar al carrito</button>
                      <?php endif; ?>
                    </div>
                   </div>
            </div>
          </div>
        </div>
      </div>
       
    </div>
  </main>
  <footer class="bg-dark text-center text-white" style="margin-top: 50px;">
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
  <script src="../js/bootstrap.min.js">
  </script>
</body>

</html>