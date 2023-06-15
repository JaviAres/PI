<?php
session_start();
include "conexiondb.php";
if(!isset($_POST['busqueda'])||$_POST['busqueda']===""){
    $cartas_query = "SELECT * FROM cartas";
    $merchan_query="SELECT * FROM merchandising";
    $q1=$con->query($cartas_query);
    $q2=$con->query($merchan_query);
}elseif(!empty($_POST)){
    $busqueda = $_POST['busqueda'];
    $cartas_query = "SELECT * FROM cartas WHERE nombre like'%$busqueda%'";
    $merchan_query="SELECT * FROM merchandising WHERE nombre like'%$busqueda%'";
    $q1 = $con->query($cartas_query);
    $q2 = $con->query($merchan_query);
}
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
  <link rel="stylesheet" href="../css/styles.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
  <header>
    <!--Navbar no fluida, peta en otros dispositivos, revisar mas adelante-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="../php/home.php"><img src="../images/logo-tienda.png" alt="Logo Tienda" id="logo"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <form class="d-flex" action="busqueda.php" method="POST">
            <input class="form-control me-2" type="text" placeholder="¿Buscas algo concreto?" aria-label="Buscar" name="busqueda" style="margin-left:350px; width:500px">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
        <div class="row" style="margin: 10px;">
         <p style="color: white;"><?php echo($_SESSION["user"]["nombre"])?></p>
        </div>
        <div class="row" style="margin: 10px;">
          <a href="../php/carrito.php">
          <p style="color:white">
            Carrito
          </p>
          </a>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div>
                <table class="table table-bordered">
                <thead>
                    <th>Nombre Cartas</th>
                    <th>Expansion</th>
                    <th>Rareza</th>
                    <th>Precio</th>
                </thead>
                <?php 
                /*
                * Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
                */
                while($c=$q1->fetch_object())
            :?>
                <tr>
                    <td><?php echo('<a href="../php/producto.php" id='.$c->id.' name=cartas onclick="recogeDatos(this)">'.$c->nombre.'</a>')?></td>
                    <td><?php echo $c->expansion; ?></td>
                    <td><?php echo $c->rareza;?></td>
                    <td><?php echo $c->precio;?></td>
                </tr>
                <?php endwhile; ?>
        </div>
                      
        <div>
                <table class="table table-bordered">
                <thead>
                    <th>Nombre Merchandising</th>
                    <th>Tipo</th>
                    <th>Precio</th>
                </thead>
                <?php 
                /*
                * Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
                */
                while($m=$q2->fetch_object())
            :?>
                <tr>
                <td><?php echo('<a href="../php/producto.php" id='.$m->id.' name=merchandising onclick="recogeDatos(this)">'.$m->nombre.'</a>')?></td>
                    <td><?php echo $m->tipo; ?></td>
                    <td><?php echo $m->precio;?></td>
                </tr>
                <?php endwhile; ?>
        </div>

  </main>
  <!-- Bootstrap JavaScript Libraries --> 
  <script src="../js/script.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  </body>
</html>