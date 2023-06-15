<?php
session_start();
include "../utiles_php/conexiondb.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Merchandising</title>
    <link rel="shortcut icon" href="../images/icono-tienda.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h1>Eliminar Merchandising</h1>
		<br>
			<ul>
	            <form action="../utiles_php/eliminaMerch.php" method="POST" enctype="multipart/form-data">

				<p><label>Nombre:</label>
               		 <input type="text" name="nombre" placeholder="Nombre"  class="form-control"/><br>
                    <p><input type="submit" name="enviar" value="Buscar" class="btn btn-primary btn-lg"/>
                    <a href="./panelAdmin.php" class="btn btn-primary btn-lg" style=background-color:#6e3dcf>Volver a Menu Admin</a>
			</ul>
	</form>	
		</div>
	</div>
</div>

</body>
</html>