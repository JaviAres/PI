
<?php
session_start();
include "../utiles_php/conexiondb.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Panel de admin</title>
	<link rel="shortcut icon" href="../images/icono-tienda.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 style="text-align:center; margin-bottom:30px">Panel de control de admin</h1>
            <table>
			<ul style="text-align:center"><a href="adminAñadirCarta.php" class="btn btn-primary btn-lg" style=background-color:#6e3dcf>Agregar Carta/s</a></ul>
            <hr>
			<ul style="text-align:center"><a href="adminEliminarCartas.php" class="btn btn-primary btn-lg" style=background-color:#6e3dcf>Eliminar Cartas/s</a></ul>
            <hr>
			<ul style="text-align:center"><a href="adminAñadirMerch.php" class="btn btn-primary btn-lg" style=background-color:#6e3dcf>Agregar Merchandising</a></ul>
            <hr>
			<ul style="text-align:center"><a href="adminEliminarMerch.php" class="btn btn-primary btn-lg" style=background-color:#6e3dcf>Eliminar Merchandising</a></ul>
            <hr>
			<ul style="text-align:center"><a href="./adminVerPedidos.php" class="btn btn-primary btn-lg" style=background-color:#6e3dcf>Ver Pedidos</a></ul>
            <hr>
			<ul style="text-align:center"><a href="./adminVerUsuarios.php" class="btn btn-primary btn-lg" style=background-color:#6e3dcf>Administracion Usuarios</a></ul>
            <hr>
            <ul style="text-align:center"><a href="./adminVerReservas.php" class="btn btn-primary btn-lg" style=background-color:#6e3dcf>Administracion Reservas</a></ul>
            <hr>
			<ul style="text-align:center"><a href="/PI/index.php" class="btn btn-primary btn-lg">Salir</a></ul>
            <hr>
			<br><br>
        </table>
</div>
</body>
</html>