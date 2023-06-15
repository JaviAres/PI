<?php
/*
* Este archio muestra los productos en una tabla.
*/
session_start();
include "../utiles_php/conexiondb.php";
?>
<!DOCTYPE html>
<html>
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
        <a class="navbar-brand" href="home.php"><img src="../images/logo-tienda.png" alt="Logo Tienda" id="logo"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
          <form class="d-flex" action="../utiles_php/busqueda.php" method="POST">
            <input class="form-control me-2" type="text" placeholder="¿Buscas algo concreto?" aria-label="Buscar" name="busqueda" style="margin-left:350px; width:500px">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
        <div class="row" style="margin: 10px;">
          <p style="color: white;"><?php echo($_SESSION["user"]["nombre"])?></p>
          <a href="../index.php"><p style="color: white;">Cerrar Sesion</p></a>
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
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Carrito</h1>
<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$cartas = $con->query("select * from cartas");
if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])):
?>
<table class="table table-bordered table-responsive">
<thead>
    <th>Cantidad</th>
	<th>Nombre</th>
	<th>Expansion/Tipo De Merchandising</th>
	<th>Rareza</th>
	<th>Precio</th>
	<th>Precio Total</th>
</thead>
<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
foreach($_SESSION["cart"] as $c):
$merchandising=$con->query("select * from merchandising where id='".$c['product_id']."' and nombre='".$c["product_name"]."'");
$cartas = $con->query("select * from cartas where id='".$c['product_id']."' and nombre='".$c["product_name"]."'");
$cr = $cartas->fetch_object();
$m=$merchandising->fetch_object();
if(!is_null($cr)):
  ?>
<tr>
<th><?php echo $c["q"];?></th>
	<td><?php echo $cr->nombre;?></td>
	<td><?php echo $cr->expansion; ?></td>
    <td><?php echo $cr->rareza; ?></td>
	<td> <?php echo $cr->precio; ?>€</td>
    <td> <?php echo $c["q"]*$cr->precio; ?>€</td>
	<td style="width:260px;">

<?php endif;?>
<?php if(!is_null($m)):?>
  <tr>
<th><?php echo $c["q"];?></th>
	<td><?php echo $m->nombre;?></td>
	<td><?php echo $m->tipo; ?></td>
  <td>No corresponde</td>
	<td> <?php echo $m->precio; ?>€</td>
    <td> <?php echo $c["q"]*$m->precio; ?>€</td>
	<td style="width:260px;">
  <?php endif; ?>
	<?php
	$found = false;
	foreach ($_SESSION["cart"] as $c) { if(is_null($m)){if($c["product_name"]==$cr->nombre){$found=true; break;}  }else if(is_null($cr)){if($c["product_name"]==$m->nombre){$found=true; break;}}}
	?>
		<a href="../utiles_php/eliminarCarrito.php?name=<?php echo $c["product_name"];?>" class="btn btn-danger">Eliminar</a>
	</td>
<?php endforeach; ?>

</table>

<form class="form-horizontal" method="POST" action="../utiles_php/procesarCarrito.php">
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Procesar Venta</button>
    </div>
  </div>
</form>


<?php else:?>
	<p class="alert alert-warning">El carrito esta vacio.</p>
<?php endif;?>

		</div>
	</div>
</div>
</body>
</html>