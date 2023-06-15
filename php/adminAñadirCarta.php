<?php
session_start();
include "../utiles_php/conexiondb.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Añadir Carta</title>
	<link rel="shortcut icon" href="../images/icono-tienda.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="shortcut icon" href="../images/icono-tienda.ico" type="image/x-icon">
</head>
<body>


            

</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<br>
		<h1>Añadir Carta</h1>
		
			<ul>
	            <form action="../utiles_php/añadecartas.php" method="POST" enctype="multipart/form-data">

				<p><label>Nombre:</label>
               		 <input type="text" name="nombre" placeholder="Nombre" class="form-control" required/><br>
				<p><label>Expansion:</label>
                	<input type="text" name="expansion" placeholder="Expansion" class="form-control" required/><br>
				<p><label>Rareza:</label>
                	<input type="text" name="rareza" placeholder="Rareza" class="form-control" required/><br>
				<p><label>Texto:</label>
                    <input type="text" name="texto" placeholder="Texto" class="form-control" required/><br>
                 <p><label> TCG:</label>
                    <input type="text" name="tcg" placeholder="TCG" class="form-control" required/><br>
                 <p><label>Precio</label>
                    <input type="text" name="precio" placeholder="Precio" class="form-control" required/><br>
                    <p><label for="foto">Imagen:</label>
                    <input type="file" name="imagen"/><br>
				<p><input type="submit" name="enviar" value="Añadir Carta" class="btn btn-primary btn-lg"/>
				<a href="./panelAdmin.php" class="btn btn-primary btn-lg" style=background-color:#6e3dcf;> Volver Menu Admin</a>
			</ul>
	</form>	
		</div>
	</div>
</div>

</body>
</html>