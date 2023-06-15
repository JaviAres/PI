<?php
session_start();
include "../utiles_php/conexiondb.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ver Reservas</title>
    <link rel="shortcut icon" href="../images/icono-tienda.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Lista Reservas</h1>
<?php

$usuarios = $con->query("select * from salas");
?>
<table class="table table-bordered">
<thead>
	<th>Numero Sala</th>
	<th>Nombre Reserva</th>
    <th>Reservado?</th>
</thead>
<?php 

while($r=$usuarios->fetch_object()):?>
<tr>
	<td><?php echo $r->numero;?></td>
    <td><?php echo $r->nombre;?></td>
	<td><?php if($r->reservado==1){echo ("Si");}else{echo("No");}; ?></td>
   <td><button type="button"class="btn btn-danger"<?php if($r->reservado==1){echo("");}else{echo("disabled");}?>> <a href="../utiles_php/eliminarReserva.php?id=<?php echo $r->id;?>" style="text-decoration: none;color:inherit;">Eliminar Reserva</a></button></td>
</tr>
<?php endwhile; ?>
</table>
<a href="./panelAdmin.php" class="btn btn-primary btn-lg" style=background-color:#6e3dcf>Volver a Menu Admin</a>
		</div>
	</div>
</div>

</body>
</html>