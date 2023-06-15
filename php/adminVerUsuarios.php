<?php
session_start();
include "../utiles_php/conexiondb.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrar Usuarios</title>
    <link rel="shortcut icon" href="../images/icono-tienda.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Lista Usuarios</h1>
<?php

$usuarios = $con->query("select * from usuarios");
?>
<table class="table table-bordered">
<thead>
	<th>Nombre</th>
	<th>Primer Apellido</th>
    <th>Segundo Apellido</th>
	<th>Contraseña</th>
    <th>Correo</th>
    <th>Telefono</th>
    <th>Direccion</th>
</thead>
<?php 

while($r=$usuarios->fetch_object()):?>
<tr>
	<td><?php echo $r->nombre;?></td>
    <td><?php echo $r->primerapellido;?></td>
	<td><?php echo $r->segundoapellido; ?></td>
    <td><?php echo $r->contraseña;?></td>
    <td><?php echo $r->correo;?></td>
    <td><?php echo $r->telefono;?></td>
    <td><?php echo $r->direccion;?></td>
   <td> <a href="../utiles_php/eliminarUsuarios.php?id=<?php echo $r->id;?>" class="btn btn-danger">Eliminar</a></td>
</tr>
<?php endwhile; ?>
</table>
<a href="./panelAdmin.php" class="btn btn-primary btn-lg" style=background-color:#6e3dcf>Volver a Menu Admin</a>
		</div>
	</div>
</div>

</body>
</html>