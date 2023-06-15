<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
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
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
      <div class="titulo" style="display:flex; align-items:center; justify-content:center">
          <img src="../images/logo-tienda.png" alt="Logo Tienda" id="logo">
          <h1>El Maletin de Kaiba</h1>
      </div>
		<br>
			<ul>
	<form action="../utiles_php/añadirUsuario.php" method="POST" enctype="multipart/form-data">
        <label>Nombre:</label>
               		<input type="text" name="nombre" placeholder="Nombre" class="form-control" required  /><br>
        <label>Primer Apellido:</label>
               		<input type="text" name="primerapellido" placeholder="Primer Apellido" class="form-control" required/><br>
        <label>Segundo Apellido:</label>
               		<input type="text" name="segundoapellido" placeholder="Segundo Apellido" class="form-control" required/><br>
				<label>Contraseña:</label>
                	<input type="text" name="contraseña" placeholder="Contraseña" class="form-control" required/><br>
				<label>Correo:</label>
                	<input type="text" name="correo" placeholder="Correo" class="form-control" required/><br>
        <label>Telefono:</label>
               		<input type="text" name="telefono" placeholder="Telefono" class="form-control" required/><br>
				<label>Direccion:</label>
                	<input type="text" name="direccion" placeholder="Direccion" class="form-control" required/><br>
				<input type="submit" name="enviar" value="Registrar Usuario" class="btn btn-secondary btn-lg" />
		
			</ul>
	</form>	
		</div>
	</div>
</div>

</body>
</html>

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
      <a class="text-white" href="home.php">EL Maletin De Kaiba</a>
    </div>
  </footer>
  <!-- Bootstrap JavaScript Libraries --> 
  <script src="js/bootstrap.min.js"></script>
</body>
</html>