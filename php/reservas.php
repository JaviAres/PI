<?php
session_start();
include "../utiles_php/conexiondb.php";
$reserva1_query="select * from salas where id=1";
$reserva2_query="select * from salas where id=2";
$reserva3_query="select * from salas where id=3";
$reserva4_query="select * from salas where id=4";
$reserva5_query="select * from salas where id=5";
$reserva6_query="select * from salas where id=6";
$reserva7_query="select * from salas where id=7";
$reserva8_query="select * from salas where id=8";
$reserva1= $con->query($reserva1_query);
$reserva2= $con->query($reserva2_query);
$reserva3= $con->query($reserva3_query);
$reserva4= $con->query($reserva4_query);
$reserva5= $con->query($reserva5_query);
$reserva6= $con->query($reserva6_query);
$reserva7= $con->query($reserva7_query);
$reserva8= $con->query($reserva8_query);
$r1= $reserva1->fetch_object();
$r2= $reserva2->fetch_object();
$r3= $reserva3->fetch_object();
$r4= $reserva4->fetch_object();
$r5= $reserva5->fetch_object();
$r6= $reserva6->fetch_object();
$r7= $reserva7->fetch_object();
$r8= $reserva8->fetch_object();
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
    <div><h1 class="d-flex justify-content-between align-items-center w-100 mb-4 pb-1 border-bottom border-dark">Salas para Reserva</h1></div>
    <div class="container-fluid">
        <div class="row">
                <div class="col">
                    <h3 class="border-bottom border-dark">Sala 1</h3>
                    <div id="contenido_reservas">
                    <form action="../utiles_php/reservarSala.php" method="POST">
                    <img src=<?php if($r1->reservado==0){echo("../images/logo-tienda.png"); }else{echo("../images/espacio-ocupado.png");}?> alt="Reserva Posible" id=<?php if($r1->reservado==0){echo("logo-reserva-confirmado"); }else{echo("imagen-ocupado");}?> class="img-fluid">
                        <h4 id=<?php if($r1->reservado==0){echo("reserva-disponible"); }else{echo("reserva-no-disponible");}?>><?php if($r1->reservado==0){echo("Disponible"); }else{echo("Ocupado");}?></h4>
                        <input type="hidden" name="id_sala" value="<?php echo $r1->id;?>">
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservaExito" id="boton-reserva"<?php if($r1->reservado==0){echo(""); }else{echo("disabled");}?>>Reserva</button>
                    </form>
                      </div>
                </div>
                <div class="col ">
                    <h3 class="border-bottom border-dark">Sala 2</h3>
                    <div id="contenido_reservas">
                    <form action="../utiles_php/reservarSala.php" method="POST">
                    <img src=<?php if($r2->reservado==0){echo("../images/logo-tienda.png"); }else{echo("../images/espacio-ocupado.png");}?> alt="Reserva Posible" id=<?php if($r2->reservado==0){echo("logo-reserva-confirmado"); }else{echo("imagen-ocupado");}?> class="img-fluid">
                        <h4 id=<?php if($r2->reservado==0){echo("reserva-disponible"); }else{echo("reserva-no-disponible");}?>><?php if($r2->reservado==0){echo("Disponible"); }else{echo("Ocupado");}?></h4>
                        <input type="hidden" name="id_sala" value="<?php echo $r2->id;?>">
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservaExito" id="boton-reserva"<?php if($r2->reservado==0){echo(""); }else{echo(" disabled");}?>>Reserva</button>
                    </form>
                  </div> 
                </div>
                <div class="col">
                    <h3 class="border-bottom border-dark">Sala 3</h3>
                    <div id="contenido_reservas">
                    <form action="../utiles_php/reservarSala.php" method="POST">
                    <img src=<?php if($r3->reservado==0){echo("../images/logo-tienda.png"); }else{echo("../images/espacio-ocupado.png");}?> alt="Reserva Posible" id=<?php if($r3->reservado==0){echo("logo-reserva-confirmado"); }else{echo("imagen-ocupado");}?> class="img-fluid">
                        <h4 id=<?php if($r3->reservado==0){echo("reserva-disponible"); }else{echo("reserva-no-disponible");}?>><?php if($r3->reservado==0){echo("Disponible"); }else{echo("Ocupado");}?></h4>
                        <input type="hidden" name="id_sala" value="<?php echo $r3->id;?>">
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservaExito" id="boton-reserva"<?php if($r3->reservado==0){echo(""); }else{echo(" disabled");}?>>Reserva</button>
                    </form>
                  </div> 
               </div>
                <div class="col">
                    <h3 class="border-bottom border-dark">Sala 4</h3>
                    <div id="contenido_reservas">
                    <form action="../utiles_php/reservarSala.php" method="POST">
                    <img src=<?php if($r4->reservado==0){echo("../images/logo-tienda.png"); }else{echo("../images/espacio-ocupado.png");}?> alt="Reserva Posible" id=<?php if($r4->reservado==0){echo("logo-reserva-confirmado"); }else{echo("imagen-ocupado");}?> class="img-fluid">
                        <h4 id=<?php if($r4->reservado==0){echo("reserva-disponible"); }else{echo("reserva-no-disponible");}?>><?php if($r4->reservado==0){echo("Disponible"); }else{echo("Ocupado");}?></h4>
                        <input type="hidden" name="id_sala" value="<?php echo $r4->id;?>">
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservaExito" id="boton-reserva"<?php if($r4->reservado==0){echo(""); }else{echo(" disabled");}?>>Reserva</button>
                    </form>
                  </div> 
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3 class="border-bottom border-dark">Sala 5</h3>
                <div id="contenido_reservas">
                <form action="../utiles_php/reservarSala.php" method="POST">
                    <img src=<?php if($r5->reservado==0){echo("../images/logo-tienda.png"); }else{echo("../images/espacio-ocupado.png");}?> alt="Reserva Posible" id=<?php if($r5->reservado==0){echo("logo-reserva-confirmado"); }else{echo("imagen-ocupado");}?> class="img-fluid">
                        <h4 id=<?php if($r5->reservado==0){echo("reserva-disponible"); }else{echo("reserva-no-disponible");}?>><?php if($r5->reservado==0){echo("Disponible"); }else{echo("Ocupado");}?></h4>
                        <input type="hidden" name="id_sala" value="<?php echo $r5->id;?>">
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservaExito" id="boton-reserva"<?php if($r5->reservado==0){echo(""); }else{echo(" disabled");}?>>Reserva</button>
                    </form>
                  </div>
              </div>
            <div class="col">
                <h3 class="border-bottom border-dark">Sala 6</h3>
                <div id="contenido_reservas">
                <form action="../utiles_php/reservarSala.php" method="POST">
                    <img src=<?php if($r6->reservado==0){echo("../images/logo-tienda.png"); }else{echo("../images/espacio-ocupado.png");}?> alt="Reserva Posible" id=<?php if($r6->reservado==0){echo("logo-reserva-confirmado"); }else{echo("imagen-ocupado");}?> class="img-fluid">
                        <h4 id=<?php if($r6->reservado==0){echo("reserva-disponible"); }else{echo("reserva-no-disponible");}?>><?php if($r6->reservado==0){echo("Disponible"); }else{echo("Ocupado");}?></h4>
                        <input type="hidden" name="id_sala" value="<?php echo $r6->id;?>">
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservaExito" id="boton-reserva"<?php if($r6->reservado==0){echo(""); }else{echo(" disabled");}?>>Reserva</button>
                    </form></div>
              </div>
            <div class="col">
                <h3 class="border-bottom border-dark">Sala 7</h3>
                <div id="contenido_reservas">
                <form action="../utiles_php/reservarSala.php" method="POST">
                    <img src=<?php if($r7->reservado==0){echo("../images/logo-tienda.png"); }else{echo("../images/espacio-ocupado.png");}?> alt="Reserva Posible" id=<?php if($r7->reservado==0){echo("logo-reserva-confirmado"); }else{echo("imagen-ocupado");}?> class="img-fluid">
                        <h4 id=<?php if($r7->reservado==0){echo("reserva-disponible"); }else{echo("reserva-no-disponible");}?>><?php if($r7->reservado==0){echo("Disponible"); }else{echo("Ocupado");}?></h4>
                        <input type="hidden" name="id_sala" value="<?php echo $r7->id;?>">
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservaExito" id="boton-reserva"<?php if($r7->reservado==0){echo(""); }else{echo(" disabled");}?>>Reserva</button>
                    </form></div>
              </div>
            <div class="col">
                <h3 class="border-bottom border-dark">Sala 8</h3>
                <div id="contenido_reservas">
                <form action="../utiles_php/reservarSala.php" method="POST">
                    <img src=<?php if($r8->reservado==0){echo("../images/logo-tienda.png"); }else{echo("../images/espacio-ocupado.png");}?> alt="Reserva Posible" id=<?php if($r8->reservado==0){echo("logo-reserva-confirmado"); }else{echo("imagen-ocupado");}?> class="img-fluid">
                        <h4 id=<?php if($r8->reservado==0){echo("reserva-disponible"); }else{echo("reserva-no-disponible");}?>><?php if($r8->reservado==0){echo("Disponible"); }else{echo("Ocupado");}?></h4>
                        <input type="hidden" name="id_sala" value="<?php echo $r8->id;?>">
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservaExito" id="boton-reserva"<?php if($r8->reservado==0){echo(""); }else{echo(" disabled");}?>>Reserva</button>
                    </form></div>
              </div>
        </div>
    </div>
    
  </main>
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
          <a class="text-white" href="index.html">EL Maletin De Kaiba</a>
        </div>
      </footer>
  <!-- Bootstrap JavaScript Libraries -->

  <script src="../js/bootstrap.min.js">
  </script>
</body>

</html>