<?php
session_start();
include "../utiles_php/conexiondb.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ver Pedidos</title>
	<link rel="shortcut icon" href="../images/icono-tienda.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Lista Pedidos</h1>
<?php

$pedido = $con->query("select * from pedido");
?>
<table class="table table-bordered">
<thead>
	<th>Usuario</th>
	<th>Productos</th>
	<th>Precio total</th>
    <th> Direccion</th>
    <th>Fecha del pedido</th>
</thead>
<?php 

while($r=$pedido->fetch_object()):?>
<tr>
	<td><?php echo $r->usuario;?></td>
	<td><?php echo $r->productos; ?></td>
    <td><?php echo $r->preciototal;?></td>
    <td><?php echo $r->direccion;?></td>
    <td><?php echo $r->fecha;?></td>
</tr>
<?php endwhile; ?>
</table>
<a href="./panelAdmin.php" class="btn btn-primary btn-lg" style=background-color:#6e3dcf;> Volver Menu Admin</a>
		</div>
	</div>
</div>

</body>
</html>