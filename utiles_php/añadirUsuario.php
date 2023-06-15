<?php
session_start();
include "conexiondb.php";
if(!empty($_POST)){
  // donde dice $variableUsuario tienes que poner la variable en la cual tienes el nombre del user para validarlo, supongo que ha de ser una POST, pero tu lo modificas
$contraseña=$_POST["contraseña"];
$contraseñacriptada=md5($contraseña);

$insert = $con->query("insert into usuarios(nombre,primerapellido,segundoapellido,contraseña,correo,telefono,direccion,rol) values ('$_POST[nombre]','$_POST[primerapellido]','$_POST[segundoapellido]','$contraseñacriptada','$_POST[correo]',$_POST[telefono],'$_POST[direccion]','user')");

    echo ("<script>alert('Usuario registrado con exito')</script>");
    print "<script>window.location='../index.php';</script>";
}
?>