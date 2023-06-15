<?php
session_start();
include "conexiondb.php";
if(!empty($_POST)){
  // donde dice $variableUsuario tienes que poner la variable en la cual tienes el nombre del user para validarlo, supongo que ha de ser una POST, pero tu lo modificas
$usuario = $_POST["nombre"];
$contraseña=$_POST["contraseña"];
$contraseñacriptada=md5($contraseña);
$q = $con->query("SELECT * FROM usuarios WHERE nombre = '$usuario' AND contraseña='$contraseñacriptada'");

 $u= $q->fetch_object();
 if(is_null($u)){  
  echo ("<script>alert('Nombre o Contraseña equivocado')</script>");
  print "<script>window.location='../index.php';</script>";
}else{
 if($u->rol=="user"){
  if(empty($_SESSION["user"])){
    $_SESSION["user"]=array("nombre"=>$_POST["nombre"],"contraseña"=>$contraseñacriptada, "rol"=>"user");
    echo ("<script>alert('Bienvenido')</script>") ;
    print "<script>window.location='../php/home.php';</script>";
  }
}elseif($u->rol=="admin"){
  if(empty($_SESSION["admin"])){
    $_SESSION["admin"]=array("nombre"=>$_POST["nombre"],"contraseña"=>$contraseñacriptada, "rol"=>"admin");
    echo ("<script>alert('Bienvenido admin')</script>");
    print "<script>window.location='../php/panelAdmin.php';</script>";
  }
}
}
}

?>